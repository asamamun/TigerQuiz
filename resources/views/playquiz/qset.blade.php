@extends('layouts.admin')

@section('title', 'Quizset Page')
@section('head')

@endsection
@section('sidebar')
    <!-- sidebar as user role -->
    @if (Auth::check() && Auth::user()->role == '1')
        @include('dashboard.sidebar')
    @elseif (Auth::check() && Auth::user()->role == '2')
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
    @include('partial.flash')
    @include('partial.error')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h3 class="m-0 font-weight-bold text-info">{{$qset->name }}</h3>
            {{-- <h3 class="m-0 font-weight-bold text-info">You got <span id ="marks">{{ $result }}</span> out of <span id="tquiz">{{ $total }}</span> </h3> --}}
@guest
<a class="btn btn-primary" href="{{ url('leaderboard/' . $qset->id) }}">Total
    Leaderboard</a>
@endguest
@auth

<a class="btn btn-sm btn-primary" href="{{ url('leaderboard/' . $qset->id) }}">Total
    Leaderboard</a>
    
<a href="{{ url('/playquiz/endqset/'.$qset->id) }}" class="btn btn-info btn-sm" title="Back to Chapter">
    <i class="fas fa-arrow-left"></i>
</a>
@endauth
        </div>
        @auth
            <div class="card-body">

                <section>
                    <div class="container mb-1">

                        <div class="row bg-info rounded">

                            @php
                                session()->put('qsid', $qset->id);
                                $ar = explode(',', $qset->quizzes);
                                $qz = DB::table('quizzes')
                                    ->whereIn('id', $ar)
                                    ->get();
                                // dd($qz);
                            @endphp



                            {{-- <span class="d-none">{{ $i = 0 }}</span> --}}
                            <div
                                class="card-header text-light bg-info py-3 d-flex flex-row align-items-center rounded mb-2 justify-content-between">
                                <h4 class="m-0 font-weight-bold ">Name: {{ $qset->name }}</h4>
                                <h4 class="m-0 font-weight-bold ">Title: {{ $qset->title }}</h4>
                                <h4 class="m-0 font-weight-bold ">Prepared by: {{ $qset->user->name }}</h4>
                                {{-- <a href="{{ url('quiz') }}" class="btn btn-info btn-circle btn-sm" title="Back to Topic List">
                                    <i class="fas fa-arrow-left"></i>
                                </a> --}}
                            </div>

                            <div class="card card-hover shadow mb-1">
                                @php
                                    $timenow = date('Y-m-d H:i:s');
                                @endphp
                                <!-- <p>A:  {{strtotime($timenow) }} </p>
                <p>B: {{ strtotime($qset->stime) }} </p>
                <p>C:  {{ strtotime($qset->entime) }} </p> -->
                                @if (strtotime($timenow) > strtotime($qset->stime) && strtotime($timenow) < strtotime($qset->entime))
                                    <form action="{{ url('result') }}" method="post">
                                        @csrf
                                        <input type="hidden" name="qset" value="{{ $qset->id }}">
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
                                            <button type="submit" class="btn btn-info text-center text-bold mb-2"
                                                id="submit">Submit
                                                Quiz</button>
                                        </div>
                                    </form>
                                @elseif(strtotime($timenow) > strtotime($qset->entime))
                                    <div class=" mt-2 text-center alert alert-warning" role="alert">
                                        <h4>Quiz Ended</h4>
                                    </div>
                                @else
                                    <div class="border-info" role="alert">
                                        <h3 class="btn btn-primary"> Quizset will start at {{ $qset->stime }} (GMT +06:00)
                                        </h3>
                                        <p id="countdown"></p>
                                        <style>
                                            p#countdown {
                                                text-align: center;
                                                font-size: 50px;
                                                margin-top: 10px;
                                                background-color: aqua;
                                                border-radius: 3px;
                                                margin-bottom: 5px;
                                            }

                                            .tfn {
                                                font-size: 25px;
                                            }

                                            .tf {
                                                font-size: 35px;
                                            }
                                        </style>
                                        <script>
                                            @php
                                                $dt = explode(' ', $qset->stime);
                                                $dmy = explode('-', $dt[0]);
                                                $hms = explode(':', $dt[1]);
                                            @endphp
                                            // Set the date we're counting down to
                                            var countDownDate = new Date({{ $dmy[0] }}, ({{ $dmy[1] }} - 1), {{ $dmy[2] }},
                                                {{ $hms[0] }}, {{ $hms[1] }}, {{ $hms[2] }}, 0).getTime();

                                            // Update the count down every 1 second
                                            var x = setInterval(function() {

                                                // Get today's date and time
                                                var now = new Date().getTime();

                                                // Find the distance between now and the count down date
                                                var distance = countDownDate - now;

                                                // Time calculations for days, hours, minutes and seconds
                                                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                                var seconds = Math.floor((distance % (1000 * 60)) / 1000);

                                                // Output the result in an element with id="demo"

                                                document.getElementById('countdown').innerHTML = days + 'd ' + hours + 'h ' +
                                                    minutes + 'm ' + seconds + 's';

                                                // If the count down is over, write some text 
                                                if (distance < 0) {
                                                    clearInterval(x);
                                                    document.getElementById("countdown").innerHTML =
                                                        "<span  class='tf'>You Can</span> <span class='btn btn btn-primary mb-3 tfn' onClick='window.location.reload();'>Start Now</span>";
                                                }
                                            }, 1000);
                                        </script>
                                    </div>
                                @endif


                            </div>
                        </div>
                    </div>
            </div>
        @endauth
        @guest
            <div>
                <span class="btn ms-2 mb-2 border-info bg-warning"><a class="text-info" href="{{ route('login') }}">Login</a>
                    or <a href="{{ route('register') }}">Register</a> to play Quizsets<span>
            </div>
        
       
        <div class="row ">
        <div class="col-12 grid-margin">
            <div class="card">
                <div class="card-header py-3 mb-1 d-flex justify-content-between">
                    <h3 class="m-0 font-weight-bold text-info">Participants' Positions</h3>
                    <a href="{{ url('quiz/qz/qshow') }}" class="btn btn-info btn-sm" title="Back to Quizset">
                        <i class="fas fa-arrow-left"></i>
                    </a>
                </div>
                <div class="card-body">
                    <div class="row">
                        @if (count($leaders))
                            @foreach ($leaders as $ans)
                                <div class="col-3">
                                    <div class="card text-white">
                                        {{-- profile pics load with defult if not exists --}}
                                        <span class="d-flex justify-content-start">
                                            @if ($ans->user->profile?->image == null || $ans->user->profile?->image == '')
                                                <img class="ms-0"
                                                    src="{{ url(Storage::url('public/profiles/default2.png')) }}"
                                                    alt="{{ $user?->name }}" width='90px'
                                                    class="rounded d-block float-start me-4 mt-2 mb-2">
                                            @else
                                                <img class="ms-0"
                                                    src="{{ url(Storage::url('public/profiles/' . $ans->user->profile->image)) }}"
                                                    alt="{{ $user?->name }}" width='90px'
                                                    class="rounded d-block float-start me-4 mt-2 mb-2">
                                            @endif
                                            <span>
                                                <h5 class="mt-3 text-info ms-2">
                                                    <a href="{{ route('profile.show', $ans->user_id) }}"> {{ $ans->user->name }} :
                        {{ $ans->marks }}</a></h5>
                                                {{-- <p class="text-info ms-2"> {{ $ans->user->email }}</p> --}}
                                            </span>
                                        </span>
                                        <div class="card-body bg-info">
                                            {{-- <h6 class="mt-1"> {{ $ans->user->name }}</h6> --}}
                                            <h6>Marks obtained: {{ $ans->marks }}</h6>
                                            <h6>Percentage:
                                                {{ ceil(($ans->marks * 100) / count($answers)) }}%
                                            </h6>
                                            <h6>Total Questions: {{ count($answers) }}</h6>


                                        </div>
                                        <div
                                            class="card-footer bg-info d-flex align-items-center justify-content-between">
                                            <a class="small text-white stretched-link" href="#">View
                                                Details</a>

                                        </div>
                                    </div>
                                </div>
                            @endforeach
                    </div>
                    <div class="table-responsive">
                        <table class="table" id="myTable">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="form-check form-check-muted m-0">
                                            <label class="form-check-label">
                                                <input type="checkbox" class="form-check-input">
                                            </label>
                                        </div>
                                    </th>
                                    {{-- <th>ID</th> --}}
                                    <th>User</th>
                                    <th>Quizset name</th>
                                    <th>Marks</th>
                                    <th>Quizzes</th>
                                    {{-- <th>Type</th> --}}
                                    <th>By</th>
                                    <th>Time</th>
                                </tr>
                            </thead>
                            @foreach ($leaders as $ans)
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check form-check-muted m-0">
                                                <label class="form-check-label">
                                                    <input type="checkbox" class="form-check-input">
                                                </label>
                                            </div>
                                        </td>
                                        {{-- <td>{{ $ans->id }}.</td> --}}
                                        <td>
                                            {{-- <img src="assets/images/faces/face1.jpg" alt="image" /> --}}
                                            <span class="pl-2">{{ $ans->user->name }}</span>
                                        </td>
                                        <td><a
                                                href="{{ url('/quiz/qz/qshow') }}">{{ $ans->Quizset->name ?? 'Random Quizzes' }}</a>
                                        </td>
                                        <td>{{ $ans->marks }}</td>
                                        <td>{{ $ans->tquiz }}</td>
                                        {{-- <td>{{ $ans->type}}</td> --}}
                                        <td>{{ $ans->Quizset->user->name ?? 'User' }}</td>
                                        <td>{{ $ans->created_at }}</td>
                                        </td>
                                    </tr>

                                </tbody>
                                @endforeach
                            @endif
                        </table>
                        {{-- Pagination --}}
                        <div class="d-flex justify-content-center">
                            {!! $answers->links() !!}
                        </div>
                    </div>
                    @endguest
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

                // =======================

                //   $(document).ready(function(){ $("p").toggle(
                //   function(){$("p").css({"color": "red"});},
                //   function(){$("p").css({"color": "blue"});},
                //   function(){$("p").css({"color": "green"});
                //  });
            });
        </script>
    @endsection
