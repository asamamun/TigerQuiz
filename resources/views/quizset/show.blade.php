@extends('layouts.admin')

@section('title','Show Chapters')
@section('sidebar')
@include('dashboard.sidebar')
@endsection

@section('navbar')
@include('inc.admin.navbar')
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-info">Quizset Details</h6>
        <a href="{{url('quizset')}}" class="btn btn-info btn-circle btn-sm" title="Back to Chapter">
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
        
                #one:checked~label.first,
                #two:checked~label.second,
                #three:checked~label.third,
                #four:checked~label.forth,
                #five:checked~label.fifth,
                #six:checked~label.sixth,
                #seven:checked~label.seveth,
                #eight:checked~label.eighth {
                    border-color: #8e498e
                }
        
                #one:checked~label.first .circle,
                #two:checked~label.second .circle,
                #three:checked~label.third .circle,
                #four:checked~label.forth .circle,
                #five:checked~label.fifth .circle,
                #six:checked~label.sixth .circle,
                #seven:checked~label.seveth .circle,
                #eight:checked~label.eighth .circle {
                    border: 6px solid #8e498e;
                    background-color: #fff
                }
        
                label.box:hover {
                    background: #d5bbf7
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
            <div class="container mb-5">
                <div class="row">
                    <div class="col-12">
                        <p class="fw-bold">1. Which of the following sentences is correct</p>
                        <div> <input type="radio" name="box" id="one"> <input type="radio" name="box" id="two"> <input
                                type="radio" name="box" id="three"> <input type="radio" name="box" id="four"> <label for="one"
                                class="box first">
                                <div class="course"> <span class="circle"></span> <span class="subject"> When its raining
                                        ,people's umbrella are all you're going to see from above </span> </div>
                            </label> <label for="two" class="box second">
                                <div class="course"> <span class="circle"></span> <span class="subject"> When its
                                        raining,people's umbrella are all your going to see from above </span> </div>
                            </label> <label for="three" class="box third">
                                <div class="course"> <span class="circle"></span> <span class="subject"> When its
                                        raining,peoples umbrella's are all you're going to see from above </span> </div>
                            </label> <label for="four" class="box forth">
                                <div class="course"> <span class="circle"></span> <span class="subject"> None of the above
                                    </span> </div>
                            </label> </div>
                    </div>
                    <div class="col-12">
                        <p class="fw-bold mt-5">2. Complete the following sentences:Alice couldn't _______ the humilation any
                            longer and stormed out of the room red as a bed</p>
                        <div>
                            <div class="row">
                                <div class="col-md-6"> <input type="radio" name="box" id="five"> <label for="five"
                                        class="box fifth w-100">
                                        <div class="course"> <span class="circle"></span> <span class="subject">is</span> </div>
                                    </label> </div>
                                <div class="col-md-6"> <input type="radio" name="box" id="six"> <label for="six"
                                        class="box sixth w-100">
                                        <div class="course"> <span class="circle"></span> <span class="subject"> was </span>
                                        </div>
                                    </label> </div>
                                <div class="col-md-6"> <input type="radio" name="box" id="seven"> <label for="seven"
                                        class="box seveth w-100">
                                        <div class="course"> <span class="circle"></span> <span class="subject"> will </span>
                                        </div>
                                    </label> </div>
                                <div class="col-md-6"> <input type="radio" name="box" id="eight"> <label for="eight"
                                        class="box eighth w-100">
                                        <div class="course"> <span class="circle"></span> <span class="subject"> None of the
                                                above </span> </div>
                                    </label> </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="d-flex justify-content-center"> <span class="btn btn-primary px-4 py-2 fw-bold">
                                continue</span> </div>
                    </div>
                </div>
            </div>
        </body>
        
        </html>
    </div>
</div>
@endsection