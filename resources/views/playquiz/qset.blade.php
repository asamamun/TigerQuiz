@extends('layouts.admin')

@section('title', 'Show Result')
@section('head')

@endsection
@section('sidebar')
    <!-- sidebar as user role -->
    @if (Auth::user()->role == '1')
        @include('dashboard.sidebar')
    @elseif (Auth::user()->role == '2')
        @include('inc.admin.trsidebar')
    @else
        @include('inc.admin.stsidebar')
    @endif
@stop
<!-- end sidebar -->
@section('navbar')
    @include('inc.admin.navbar')
@stop

@section('content')

    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h3 class="m-0 font-weight-bold text-info">Quiz Result</h3>
            {{-- <h3 class="m-0 font-weight-bold text-info">You got <span id ="marks">{{ $result }}</span> out of <span id="tquiz">{{ $total }}</span> </h3> --}}

            <a href="{{ url('quizset') }}" class="btn btn-info btn-circle btn-sm" title="Back to Chapter">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">

              <section>
                    <div class="container mb-1">

                        <div class="row">
                            @forelse($qset as $qs)
                                @php
                                    
                                    $ar = explode(',', $qs->quizzes);
                                    $qz = DB::table('quizzes')
                                        ->whereIn('id', $ar)
                                        ->get();
                                    //  dd($ar, $qz);
                                @endphp
                            @empty
                                <td>
                                    No Information to Display
                                </td>
                            @endforelse


                            {{-- <span class="d-none">{{ $i = 0 }}</span> --}}
                            <div
                                class="card-header py-3 d-flex flex-row align-items-center rounded mb-2 justify-content-between">
                                <h4 class="m-0 font-weight-bold text-dark">Name: {{ $qs->name }}</h4>
                                <h4 class="m-0 font-weight-bold text-dark">Title: {{ $qs->title }}</h4>
                                <h4 class="m-0 font-weight-bold text-dark">Prepared by: {{ $qs->user->name }}</h4>
                                {{-- <a href="{{ url('quiz') }}" class="btn btn-info btn-circle btn-sm" title="Back to Topic List">
                                    <i class="fas fa-arrow-left"></i>
                                </a> --}}
                            </div>

                            <div class="card card-hover shadow mb-1">
                                <form action="{{ url('result') }}" method="post">
                                    @csrf
                                    @foreach ($qz as $q)
                                        <div class="mt-3">
                                            <h5>{{ $q->question }}</h5>
                                            <div class="col-12">

                                                <div>
                                                    <div class='quizcontainer mt-1'>
                                                        <div class='col-12 mb-2'>
                                                            <input type='radio' name="box{{ $q->id }}"
                                                                value="op1" id="one{{ $q->id }}" class='one'>
                                                            <input type='radio' name="box{{ $q->id }}"
                                                                value="op2" id="two{{ $q->id }}" class='two'>
                                                            <input type='radio' name="box{{ $q->id }}"
                                                                value="op3" id="three{{ $q->id }}"
                                                                class='three'>
                                                            <input type='radio' name="box{{ $q->id }}"
                                                                value="op4" id="four{{ $q->id }}" class='four'>
                                                            <label for='one{{ $q->id }}' class='box first'>
                                                                <div class='course op1'><span class='circle'></span><span
                                                                        class='subject'>{{ $q->op1 }}</span></div>
                                                            </label>
                                                            <label for='two{{ $q->id }}' class='box second'>
                                                                <div class='course op2'><span class='circle'></span><span
                                                                        class='subject'>{{ $q->op2 }}</span></div>
                                                            </label>
                                                            <label for='three{{ $q->id }}' class='box third'>
                                                                <div class='course op3'><span class='circle'></span><span
                                                                        class='subject'>{{ $q->op3 }}</span></div>
                                                            </label>
                                                            <label for='four{{ $q->id }}' class='box forth'>
                                                                <div class='course op4'><span class='circle'></span><span
                                                                        class='subject'>{{ $q->op4 }}</span></div>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="form-group row">
                                                    <div
                                                        class="col-sm-12 mb-3 mb-sm-0 d-flex justify-content-between align-self-center">
                                                        <div>
                                                            <span id="ansbtn" data-answer="{{ $q->ans }}"
                                                                class="ansbtn btn btn-sm btn-info my-2 px-4 fw-bold">Currect
                                                                Answer</span>
                                                            <span id="ansshow"
                                                                class="ansshow d-none btn btn-sm btn-success ms-2 my-2 px-4 fw-bold">{{ $q->ans }}</span>
                                                        </div>
                                                        <div> <span
                                                                class="btn btn-sm btn-info my-2 px-4 fw-bold">Clean</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>
                                    @endforeach
                                    <div class="d-grid gap-2">
                                        <button type="submit" class="btn btn-sm btn-info text-center mb-2"
                                            id="submit">Submit
                                            Quiz</button>
                                    </div>
                                </form>
                            </div>
                        </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('inc.admin.footer')
@endsection
@section('scripts')

    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        $('.navbar-toggler-icon').trigger('click');
        $(document).ready(function() {

            // alert(5)
            $(".ansshow").hide();
            $(document).on("click", '.ansbtn', function() {

                $t = $(this);
                $answer = $t.data('answer');
                // console.log($answer);
                $t.next('span').toggle();
                $t.closest('.quizcontainer').find('.' + $answer).toggleClass('bg-warning rounded');
                // console.log($t.closest('.quizcontainer').find('.'+$answer));
            });

            // =======================

            $(window).load(function() {

                $.ajax({
                    type: "post",
                    url: "{{ url('storeanswer') }}",
                    data: {
                        marks: $("#marks").val(),
                        tquiz: $("#tquiz").val()
                    },

                });


            });
            // =======================

            //   $(document).ready(function(){ $("p").toggle(
            //   function(){$("p").css({"color": "red"});},
            //   function(){$("p").css({"color": "blue"});},
            //   function(){$("p").css({"color": "green"});
            //  });
        });
    </script>
@endsection
