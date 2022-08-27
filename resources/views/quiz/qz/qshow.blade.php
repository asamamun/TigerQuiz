@extends('layouts.admin')

@section('title', 'Show Chapters')
@section('head')

@endsection
@section('sidebar')
    {{-- sidebar as user role --}}
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
            <h6 class="m-0 font-weight-bold text-info">Quizset Details</h6>
            <a href="{{ url('quizset') }}" class="btn btn-info btn-circle btn-sm" title="Back to Chapter">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">

            <!doctype html>
            <html lang=en>

            <head>
                <meta charset=utf-8>

<!--                 <style>
                    * {
                        margin: 0;
                        padding: 0;
                        box-sizing: border-box;
                        font-family: 'palatino linotype', Rupali;
                    }

                    p {
                        margin: 0%
                    }


                    .container {
                        margin: 30px auto;
                        background: white;
                        padding: 20px 15px
                    }

                    label.box {
                        display: flex;
                        margin-top: 10px;
                        padding: 10px 12px;
                        border-radius: 5px;
                        cursor: pointer;
                        border: 1px solid #ddd
                    }

                    #one:checked~label.first,
                    #two:checked~label.second,
                    #three:checked~label.third,
                    #four:checked~label.forth,
                    #five:checked~label.fifth,
                    #six:checked~label.sixth,
                    #seven:checked~label.seveth,
                    #eight:checked~label.eighth {
                        border-color: #00FFFF
                    }

                    #one:checked~label.first .circle,
                    #two:checked~label.second .circle,
                    #three:checked~label.third .circle,
                    #four:checked~label.forth .circle,
                    #five:checked~label.fifth .circle,
                    #six:checked~label.sixth .circle,
                    #seven:checked~label.seveth .circle,
                    #eight:checked~label.eighth .circle {
                        border: 6px solid #00FFFF;
                        background-color: #fff
                    }

                    label.box:hover {
                        background: #FFA500
                    }

                    label.box .course {
                        display: flex;
                        align-items: center;
                        width: 100%
                    }

                    label.box .circle {
                        height: 22px;
                        width: 22px;
                        border-radius: 50%;
                        margin-right: 15px;
                        border: 2px solid #ddd;
                        display: inline-block
                    }

                    input[type="radio"] {
                        display: none
                    }

                    .btn.btn-primary {
                        border-radius: 25px;
                        margin-top: 20px
                    }

                    @media(max-width: 450px) {
                        .subject {
                            font-size: 12px
                        }
                    }
                </style> -->


            </head>

            <body>
                <div class="container mb-1">
                    <div class="row">
                        <span class="d-none">{{ $sl = 1 }}</span>
                        @foreach ($quizzes as $quiz)
                            <div class="col-12">
                                <p class="fw-bold border rounded py-2 ps-2">{{ $sl++ . '. ' . $quiz->question }}</p>
                                <div>
                                    <input type="radio" name="box{{$quiz->id}}" id="one{{$quiz->id}}">
                                    <input type="radio" name="box{{$quiz->id}}" id="two{{$quiz->id}}">
                                    <input type="radio" name="box{{$quiz->id}}" id="three{{$quiz->id}}">
                                    <input type="radio" name="box{{$quiz->id}}" id="four{{$quiz->id}}">
                                    <label for="one{{$quiz->id}}" class="box first">

                                    <div class="course"> <span class="circle"></span> <span class="subject">
                                                {{ $quiz->op1 }} </span> </div>
                                    </label> <label for="two{{$quiz->id}}" class="box second">
                                        <div class="course"> <span class="circle"></span> <span class="subject">
                                                {{ $quiz->op2 }} </span> </div>
                                    </label> <label for="three{{$quiz->id}}" class="box third">
                                        <div class="course"> <span class="circle"></span> <span class="subject">
                                                {{ $quiz->op3 }} </span> </div>
                                    </label> <label for="four{{$quiz->id}}" class="box forth">
                                        <div class="course"> <span class="circle"></span> <span class="subject">
                                                {{ $quiz->op4 }} </span> </div>
                                    </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex justify-content-center"> <span
                                        class="btn btn-sm btn-info my-2 px-4 fw-bold">
                                        Clean</span> </div>
                            </div>
                            <hr>
                        @endforeach
                    </div>
                </div>
            </body>

            </html>
        </div>
    </div>
@endsection
@section('footer')
@include('inc.admin.footer')
@endsection
