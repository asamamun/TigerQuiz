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
        <h6 class="m-0 font-weight-bold text-info">Quiz Details</h6>
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
                <div class="form-group mt-1 row">
                    <div class="col-sm-3 mb-3">
                        {!! Form::select('category_id', $categories, null, [
                        'required',
                        'class' => 'form-control',
                        'id' => 'category_id',
                        'placeholder' => 'Select Category',
                        ]) !!}

                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        {!! Form::select('subcategory_id', [], null, ['required',
                        'class' => 'form-control ',
                        'id' => 'subcategory_id',
                        'placeholder' => 'Select Subcategory',
                        ]) !!}

                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        {!! Form::select('topic_id', [], null, ['required',
                        'placeholder' => 'Select Topic',
                        'class' => 'form-control',
                        'id' => 'topic_id',
                        'placeholder' => 'Select Topic',
                        ]) !!}

                    </div>
                    <div class="col-sm-3 mb-3 mb-sm-0">
                        {!! Form::select('type', ['m' => 'MCQ', 'd' => 'Descriptive', 'qi' => 'Image'], 'm', [
                        'required',
                        'class' => 'form-control',
                        'id' => 'type',
                        'rows' => '1',
                        ]) !!}
                    </div>
                </div>


                <div id="Showquiz" class="card  mb-1">
                    <div class="card-header py-3 d-flex justify-content-between">
                        <span class="btn btn-info">Refresh</span>
                        <span class="btn btn-info" id="showQuizBtn"> Show Quizzes</span>
                        </a>
                    </div>
            </section>

            <div class="container mb-1">

                <div class="row">
                    <span class="d-none">{{ $sl = 1 }}</span>
                    @foreach ($quizzes as $quiz)
                    <div class="quizcontainer">
                        <div class="col-12">
                            <p class="fw-bold border rounded py-2 ps-2">{{ $sl++ . '. ' . $quiz->question }}</p>
                            <div>
                                <input type="radio" name="box{{ $quiz->id }}" id="one{{ $quiz->id }}" class="one">
                                <input type="radio" name="box{{ $quiz->id }}" id="two{{ $quiz->id }}" class="two">
                                <input type="radio" name="box{{ $quiz->id }}" id="three{{ $quiz->id }}" class="three">
                                <input type="radio" name="box{{ $quiz->id }}" id="four{{ $quiz->id }}" class="four">
                                <label for="one{{ $quiz->id }}" class="box first">

                                    <div class="course op1"> <span class="circle"></span> <span class="subject">
                                            {{ $quiz->op1 }} </span> </div>
                                </label> <label for="two{{ $quiz->id }}" class="box second">
                                    <div class="course op2"> <span class="circle"></span> <span class="subject">
                                            {{ $quiz->op2 }} </span> </div>
                                </label> <label for="three{{ $quiz->id }}" class="box third">
                                    <div class="course op3"> <span class="circle"></span> <span class="subject">
                                            {{ $quiz->op3 }} </span> </div>
                                </label> <label for="four{{ $quiz->id }}" class="box forth">
                                    <div class="course op4"> <span class="circle"></span> <span class="subject">
                                            {{ $quiz->op4 }} </span> </div>
                                </label>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-12 mb-3 mb-sm-0 d-flex justify-content-between align-self-center">
                                <div class="">
                                    <span id="ansbtn" data-answer="{{$quiz->ans}}" class="ansbtn btn btn-sm btn-info my-2 px-4 fw-bold">Answer</span>
                                    <span id="ansshow" class="ansshow btn btn-sm btn-success ms-2 my-2 px-4 fw-bold">{{ $quiz->ans }}</span>
                                </div>
                                {{-- <span id="button1{{$quiz->id}}" onclick="SwitchButtons('button1{{ $quiz->id}}');"
                                class="sideviewtoggle btn btn-sm btn-info my-2 px-4 fw-bold">Answer</span>

                                <span id="button2{{$quiz->id}}" onclick="SwitchButtons('button2{{$quiz->id}}');" class="sideviewtoggle btn btn-sm btn-info my-2 px-4 fw-bold" style='display:none;'>{{ $quiz->ans}}</span> --}}

                                <div> <span class="btn btn-sm btn-info my-2 px-4 fw-bold">
                                        Clean</span> </div>
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
            $t.closest('.quizcontainer').find('.' + $answer).toggleClass('bg-primary');
            // console.log($t.closest('.quizcontainer').find('.'+$answer));
        });

        /*             $(".ansbtn").click(function(event) {
                        event.preventDefault();
                        $('.ansshow').toggle().removeClass('d-none');
                        // $('#ansbtn').addClass('d-none');
                    }); */
        // for subcats as cats
        function selectscat(ob) {
            $("#subcategory_id").html("");
            let html = "";
            for (const key in ob) {
                if (Object.hasOwnProperty.call(ob, key)) {
                    html += "<option value='" + key + "'>" + ob[key] + "</option>";
                }
            }
            $("#subcategory_id").html(html);
        }
        $("#category_id").change(function() {
            // console.log( $(this).val() )
            let URL = "{{ url('subcats') }}";
            $.ajax({
                type: "post",
                url: URL + '/' + $(this).val(),
                data: "data",
                dataType: "json",
                success: function(response) {
                    selectscat(response);
                }
            });
        });

        // for topics as subcats
        function selecttopic(ot) {
            $("#topic_id").html("");
            let html = "";
            for (const k in ot) {
                if (Object.hasOwnProperty.call(ot, k)) {

                    html += "<option value='" + k + "'>" + ot[k] + "</option>";
                }
            }
            $("#topic_id").html(html);
        }
        $("#subcategory_id").change(function() {
            // console.log( $(this).val() )
            let URL = "{{ url('topics') }}";
            $.ajax({
                type: "post",
                url: URL + '/' + $(this).val(),
                data: "data",
                dataType: "json",
                success: function(response) {
                    selecttopic(response);
                }
            });
        });

         //showQuizBtn click start
        $("#showQuizBtn").click(function() {
            $.ajax({
                    method: "POST",
                    url: "{{url('dynamicquiz')}}",
                    data: {
                        cid: $("#category_id").val(),
                        scid: $("#subcategory_id").val(),
                        tid: $("#topic_id").val(),
                        type: $("#type").val()
                    }
                })
                .done(function(data) {
                    console.log(data);
                    if(data.length != 0){
                        //show the quiz
                    }
                    else{
                        console.log("no quiz in the databaes");
                    }
                    //console.log(data);
                });
        });
        //showQuizBtn click end
 
    });
</script>
@endsection