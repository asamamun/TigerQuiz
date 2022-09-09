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
            <!-- Button trigger modal -->
            <span type="button" class="btn btn-info">
                <h3 class="m-0 font-weight-bold text-light">You got <span id="marks">{{ $result }}</span> out of
                    <span id="tquiz">{{ $total }}</span>
                </h3>
            </span>
            <a href="{{ url('quiz/qz/qshow') }}" class="btn btn-info btn-sm" title="Back to Quizset">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>

        <div class="card-body">
            @include('partial.flash')
            @include('partial.error')
            <section>
                <div class="container mb-1">

                    <div class="row">
                        <span class="d-none">{{ $i = 0 }}</span>
                        @foreach ($quizzes as $q)
                            <div class="quizcontainer">
                                <div class="col-12">
                                    <h5>{{ $q->question }}</h5>
                                    <div>
                                        <input type="radio" name="radio" id="one1" class="one">
                                        <label for="one1" class="box first">
                                            <div class="course op1"> <span class="circle"></span> <span class="subject">
                                                    <p>Your Answer : {{ $quizans[$i++] }}</p>
                                                </span> </div>
                                        </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-12 mb-3 mb-sm-0 d-flex justify-content-between align-self-center">
                                        <div>
                                            <span id="ansbtn" data-answer="{{ $q->ans }}"
                                                class="ansbtn btn btn-sm btn-info my-2 px-4 fw-bold">Currect
                                                Answer</span>
                                            <span id="ansshow"
                                                class="ansshow btn btn-sm btn-success ms-2 my-2 px-4 fw-bold">{{ $q->ans }}</span>
                                        </div>
                                        <div> <span class="btn btn-sm btn-info my-2 px-4 fw-bold">Clean</span></div>
                                    </div>
                                </div>
                            </div>

                            <hr>
                        @endforeach
                    </div>
                </div>
                <span type="button" id="savemark" class="btn btn-info d-none" data-bs-toggle="modal"
                    data-bs-target="#savemarks">

                </span>
                <!-- Modal -->
                <div class="modal fade" id="savemarks" tabindex="-1" aria-labelledby="quizmodal" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header bg-primary">

                                <h4 class="modal-title text-center text-light" id="quizmodal">Would you like to save your
                                    Marks?</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"
                                    aria-label="Close"></button>
                            </div>

                            <div class="modal-body">
                                <h3 class="m-0 font-weight-bold text-info">You got <span
                                        id="marks">{{ $result }}</span> out of <span
                                        id="tquiz">{{ $total }}</span> </h3>
                            </div>
                            <form action="{{ url('/storeanswer') }}" method='post'>
                                @csrf
                                @method('post')
                                <div class="d-none">
                                    <input type="text" name="marks" id="marks" value="{{ $result }}">
                                    <input type="text" name="tquiz" id="tquiz" value="{{ $result }}">
                                    <input type="text" name="type" id="type" value="rq">
                                </div>
                                <div class="modal-footer small">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                                    <button type="submit" class="btn btn-info">Yes</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                {{-- modal end --}}

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
            // $(".ansshow").hide();
            $(document).on("click", '.ansbtn', function() {

                $t = $(this);
                $answer = $t.data('answer');
                // console.log($answer);
                $t.next('span').toggle();
                $t.closest('.quizcontainer').find('.' + $answer).toggleClass('bg-warning rounded');
                // console.log($t.closest('.quizcontainer').find('.'+$answer));
            });

            // =======================


            // =======================

            //   $(document).ready(function(){ $("p").toggle(
            //   function(){$("p").css({"color": "red"});},
            //   function(){$("p").css({"color": "blue"});},
            //   function(){$("p").css({"color": "green"});
            //  });
            setTimeout(function() {
            $('#savemark').trigger('click'); },20);
        });
    </script>
@endsection
