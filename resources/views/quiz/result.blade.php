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
        <h3 class="m-0 font-weight-bold text-info">You got {{$result}} out of {{$total}} </h3>
        <a href="{{ url('quizset') }}" class="btn btn-info btn-circle btn-sm" title="Back to Chapter">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
    <div class="card-body">

        <!doctype html>
        <html lang=en>

        <head>
            <meta charset=utf-8>
            <style>
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

                .one:checked~label.first,
                .two:checked~label.second,
                .three:checked~label.third,
                .four:checked~label.forth,
                .five:checked~label.fifth,
                .six:checked~label.sixth,
                .seven:checked~label.seveth,
                .eight:checked~label.eighth {
                    border-color: #00FFFF
                }

                .one:checked~label.first .circle,
                .two:checked~label.second .circle,
                .three:checked~label.third .circle,
                .four:checked~label.forth .circle,
                .five:checked~label.fifth .circle,
                .six:checked~label.sixth .circle,
                .seven:checked~label.seveth .circle,
                .eight:checked~label.eighth .circle {
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
            </style>


        </head>

        <body>
            <section>
            <div class="container mb-1">

                <div class="row">
                    <span class="d-none">{{ $sl = 1 }}</span>
                    @foreach($quizzes as $q)
                    <div class="quizcontainer">
                        <div class="col-12">
                            <h3>{{$q->question}}</h3>
                            <div>
                                <input type="radio" name="box1" id="one1" class="one">
                                <label for="one1" class="box first">
                                    <div class="course op1"> <span class="circle"></span> <span class="subject">
                                        <p>Correct answer : {{$q->ans}}</p></span> </div>
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0 d-flex justify-content-between align-self-center">
                                <div>
                                    <span id="ansbtn" data-answer="{{$q->ans}}" class="ansbtn btn btn-sm btn-info my-2 px-4 fw-bold">Answer</span>
                                    <span id="ansshow" class="ansshow btn btn-sm btn-success ms-2 my-2 px-4 fw-bold">{{ $q->ans }}</span>
                                </div>
                                <div> <span class="btn btn-sm btn-info my-2 px-4 fw-bold">Clean</span></div>
                            </div>
                        </div>
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
@section('scripts')

<script type="text/javascript">
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

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
        
 

   $( window ).on( "load", ( trigger(){
    $(".navbar-toggler-icon").trigger('click');
        
    });
</script>
@endsection