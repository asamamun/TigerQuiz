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
        @include('partial.flash')
        @include('partial.error')
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
                            {!! Form::select('subcategory_id', [], null, [
                                'required',
                                'class' => 'form-control ',
                                'id' => 'subcategory_id',
                                'placeholder' => 'Select Subcategory',
                            ]) !!}

                        </div>
                        <div class="col-sm-3 mb-3 mb-sm-0">
                            {!! Form::select('topic_id', [], null, [
                                'required',
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
                    </div>
                </section>

                <div class="container mb-1">

                    <div class="row">
                        <span class="d-none">{{ $sl = 1 }}</span>
                        <div class="col-12" id="quizcontainer">



                        </div>
                        <hr>
                        <div class="d-none" id="quiz"></div>
                        <span class="btn btn-light text-center text-info mb-2" id="results"></span>
                        <button class="btn btn-info text-center mb-2" id="submit">Submit Quiz</button>
                        {{-- <div class="d-grid gap-2">
                            <ul class="list-group d-none" id="selectedQuizContainer">
                            </ul>
                            <span class="btn btn-info text-center" id="saveAnsBtn"> Submit</span>
                        </div> --}}
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
            // answer btn toggle
            $(".ansshow").hide();
            $(document).on("click", '.ansbtn', function() {
                $t = $(this);
                $answer = $t.data('answer');
                $t.next('span').toggle();
                $t.closest('.quizcontainer').find('.' + $answer).toggleClass('bg-warning rounded');
                // console.log($t.closest('.quizcontainer').find('.'+$answer));
            });
            
            $(document).on("click", '.course', function() {
                var params = $("input[type=radio]:checked").val();
                alert(params);
            });
            // render_quiz_questions
            function render_quiz_questions(quizzes) {
                console.log(quizzes);
                let q = "";
                quizzes.forEach(quiz => {
                    let html = '';
                    if (quiz.qimage !== "" && quiz.qimage !== null) {
                        html += "<img src='{{ url('/') }}/storage/quizimages/" + quiz.qimage +
                            "' class='img-fluid'/>";
                    }

                    html +=
                        `<li class='fw-bold border rounded py-2 ps-2'>${quiz.question}</li><div>
                            <div class='quizcontainer'>
                            <div class='col-12 mb-2'>
                            <input type='radio' name="box${quiz.id}" value="op1" id="one${quiz.id}" class='one'>
                            <input type='radio' name="box${quiz.id}" value="op2" id="two${quiz.id}" class='two'>
                            <input type='radio' name="box${quiz.id} "value="op3" id="three${quiz.id}" class='three'>
                            <input type='radio' name="box${quiz.id} "value="op4" id="four${quiz.id}" class='four'>
                            <label for='one${quiz.id}' class='box first'><div class='course op1'><span class='circle'></span><span class='subject'>${quiz.op1}</span></div></label>
                            <label for='two${quiz.id}' class='box second'><div class='course op2'><span class='circle'></span><span class='subject'>${quiz.op2}</span></div></label>
                            <label for='three${quiz.id}' class='box third'><div class='course op3'><span class='circle'></span><span class='subject'>${quiz.op3}</span></div></label>
                            <label for='four${quiz.id}' class='box forth'><div class='course op4'><span class='circle'></span><span class='subject'>${quiz.op4}</span></div></label>
                            </div>
                        </div>
                        <div class='form-group row'>
                            <div class='col-sm-12 mb-3 mb-sm-0 d-flex justify-content-between align-self-center'>
                            <div>
                            <span id='ansbtn' data-answer='${quiz.ans}' class='ansbtn btn btn-sm btn-info my-2 px-4 fw-bold'>Answer</span>
                            <span class='ansshow btn btn-sm btn-success ms-2 my-2 px-4 fw-bold'>${quiz.ans}</span>
                            </div>
                            <div><span class='btn btn-sm btn-info my-2 px-4 fw-bold'>Clean</span></div></div></div>
                        </div>`;
                    q += html;
                });
                $("#quizcontainer").html(q);
                $(".ansshow").hide();
            }
            // alert(55)

            //showQuizBtn click start
            $("#showQuizBtn").click(function() {
                $.ajax({
                        method: "POST",
                        url: "{{ url('dynamicquiz') }}",
                        data: {
                            cid: $("#category_id").val(),
                            scid: $("#subcategory_id").val(),
                            tid: $("#topic_id").val(),
                            type: $("#type").val()
                        },
                        dataType: "json",
                        success: function(response) {
                            // alert(9)
                            // console.log(response);
                            response = JSON.parse(response);
                            //$("#quizcontainer").html(response);
                            render_quiz_questions(response);
                        }
                    })
                    .done(function(data) {
                        // console.log(data);

                        if (data.length != 0) {
                            //show the quiz
                        } else {
                            console.log("no quiz in the databaes");
                        }
                        //console.log(data);
                    });
            });
            $("#showQuizBtn").trigger('click');
            //showQuizBtn click end
            // ==============================================
            $(document).on("click", ".addToQuizsetBtn", function() {
                // alert(5);
                let id = $(this).data('id');
                let ans = $(this).data('ans');
                let html =
                    `<li class="list-group-item d-flex justify-content-between" data-selected=${id}>${id}. <span class="d-none">${ans}</span> <span><i class="removeqbtn btn btn-sm text-danger fa-solid fa-rectangle-xmark"></i></span></li>`;
                $("#selectedQuizContainer").append(html);

            });
           

            // //store quizset
            // $("#saveAnsBtn").click(function(e) {
            //     e.preventDefault();
            //     let qArr = [];
            //     $.each($("#selectedQuizContainer li"), function(indexInArray, valueOfElement) {
            //         //console.log($(this).data('selected'));
            //         qArr.push($(this).data('selected'));
            //     });
            //     $.ajax({
            //         type: "post",
            //         url: "{{ url('storeanswer') }}",
            //         data: {
            //             qid: $("#qid").val(),
            //             qsid: $("#qsid").val(),
            //             gans: $("#gans").val(),
            //             marks: $("#marks").val(),
            //             // quiz: qArr
            //         },
            //         dataType: "json",
            //         success: function(response) {
            //             if (response.error == "1") {
            //                 alert("Something went wrong!!");
            //             } else {
            //                 location.reload();
            //             }
            //         }
            //     });


            // });

        });
        // 
        // =========================================================================
        (function() {
            function buildQuiz() {
                // variable to store the HTML output
                const output = [];
                // for each question...
                quizzes.forEach(
                    (currentQuestion, questionNumber) => {

                        // variable to store the list of possible answers
                        const answers = [];

                        // and for each available answer...
                        for (letter in currentQuestion.answers) {

                            // ...add an HTML radio button
                            answers.push(
                                `<label>
                  <input type="radio" name="question${questionNumber}" value="${letter}">${letter} :
                  ${currentQuestion.answers[letter]}
                 </label>`);
                        }

                        // add this question and its answers to the output
                        output.push(
                            `<div class="question"> ${currentQuestion.question} </div>
              <div class="answers"> ${answers.join('')} </div>`
                        );
                    }
                );

                // finally combine our output list into one string of HTML and put it on the page
                quizContainer.innerHTML = output.join('');
            }

            function showResults() {

                // gather answer containers from our quiz
                const answerContainers = quizContainer.querySelectorAll('.answers');

                // keep track of user's answers
                let numCorrect = 0;

                // for each question...
                quizzes.forEach((currentQuestion, questionNumber) => {

                    // find selected answer
                    const answerContainer = answerContainers[questionNumber];
                    const selector = `input[name=question${questionNumber}]:checked`;
                    const userAnswer = (answerContainer.querySelector(selector) || {}).value;

                    // if answer is correct
                    if (userAnswer === currentQuestion.correctAnswer) {
                        // add to the number of correct answers
                        numCorrect++;

                        // color the answers green
                        answerContainers[questionNumber].style.color = 'lightgreen';
                    }
                    // if answer is wrong or blank
                    else {
                        // color the answers red
                        answerContainers[questionNumber].style.color = 'red';
                    }
                });

                // show number of correct answers out of total ${Math.floor(Math.random() * 5 + 4)} 
                resultsContainer.innerHTML =
                    `<h2> Tiger Quiz Result: You got ${numCorrect} marks out of ${quizzes.length}</h2>`;
            }

            const quizContainer = document.getElementById('quiz');
            const resultsContainer = document.getElementById('results');
            const submitButton = document.getElementById('submit');
            const quizzes = [{
                    question: "Who invented JavaScript?",
                    answers: {
                        a: "Douglas Crockford",
                        b: "Sheryl Sandberg",
                        c: "Brendan Eich"
                    },
                    correctAnswer: "c"
                },
                {
                    question: "Which one of these is a JavaScript package manager?",
                    answers: {
                        a: "Node.js",
                        b: "TypeScript",
                        c: "npm"
                    },
                    correctAnswer: "c"
                },
                {
                    question: "Which tool can you use to ensure code quality?",
                    answers: {
                        a: "Angular",
                        b: "jQuery",
                        c: "RequireJS",
                        d: "ESLint"
                    },
                    correctAnswer: "d"
                }
            ];

            // Kick things off
            buildQuiz();

            // Event listeners
            submitButton.addEventListener('click', showResults);
        })();
    </script>
@endsection
