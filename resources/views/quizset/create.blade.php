@extends('layouts.admin')

@section('title', 'Add Chapter')
@section('sidebar')
    @include('dashboard.sidebar')
@endsection

@section('navbar')
    @include('inc.admin.navbar')
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-info">Add Quiz</h6>
            <a href="{{ url('quiz') }}" class="btn btn-info btn-circle btn-sm" title="Back to Topic List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {{ Form::open(['route' => 'quizset.store', 'class' => 'quizset']) }}

            @include('partial.flash')
            @include('partial.error')

            <div class="form-group mt-1 row">
                <div class="col-sm-6 mb-3">
                    <input type="text" id="name" class="form-control" placeholder="Quizset Name">
                </div>
                <div class="col-sm-6 mb-3">
                    <input type="text" id="title" class="form-control" placeholder="Quizset Title">
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3 mb-3">
                    {!! Form::select('category_id', $categories, null, [
                        'required',
                        'class' => 'form-control form-control-profile',
                        'id' => 'category_id',
                        'placeholder' => 'Category',
                    ]) !!}

                </div>
                <div class="col-sm-3">
                    {!! Form::select('subcategory_id', $subcategories, null, [
                        'required',
                        'class' => 'form-control form-control-profile',
                        'id' => 'subcategory_id',
                        'placeholder' => 'Subcategory',
                    ]) !!}

                </div>
                <div class="col-sm-3">
                    {!! Form::select('type', ['m' => 'MCQ', 'd' => 'Descriptive'], 'm', [
                        'required',
                        'class' => 'form-control form-control-profile',
                        'id' => 'type',
                        'rows' => '1',
                        'placeholder' => 'Type',
                    ]) !!}
                </div>
                <div class="col-sm-3">
                    <div class=" mb-3 mb-sm-0">
                        {!! Form::hidden('user_id', Auth::user()->id, null, [
                            'required',
                            'disabled',
                            'class' => 'form-control',
                            'id' => 'user_id',
                            'placeholder' => 'User',
                        ]) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::button('Show', ['class' => 'btn btn-info btn-profile btn-block', 'id' => 'showbtn']) !!}
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>

        </div>
    </div>
    <hr>

    <div class="row">

        <div class="col-8 border rounded shadow">

            <div class="card-header my-2 ps-2 pe-2 py-1 rounded border d-flex justify-content-between">
                <h4 class="m-0 font-weight-bold text-info">All Quiz</h4>
                <a href="{{ url('quizset') }}" class="btn btn-info btn-circle btn-sm" title="Back to Subject List">
                    <i class="fas fa-arrow-left"></i>
                </a>
            </div>
            <div class="card pt-1 rounded border" id="quizcontainer">
                {{-- quizcontainer --}}
            </div>

        </div>
        <!-- Selected Quiz -->
        <div class="col-4 rounded border border-left shadow">
            <h3>Selected Quiz</h3>
            <ul class="list-group" id="selectedQuizContainer">
            </ul>
            <button type="submit" id="saveQuizsetBtn" class="btn btn-primary mt-2 btn-sm">Add to Quizset</button>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        $(document).ready(function() {
            function render_quiz_questions(quizes) {
                let q = "";
                /* <ol class="list-group list-group-numbered">
                  <li class="list-group-item">Cras justo odio</li>
                  <li class="list-group-item">Cras justo odio</li>
                  <li class="list-group-item">Cras justo odio</li>
                </ol> */
                quizes.forEach(quiz => {
                    let html = "<h5 class='m-0 font-weight-bold card-header rounded text-dark'>" + quiz
                        .question +
                        "</h5>";
                    html +=
                        `
        <div class="card-body border-bottom my-1">
        <ol class="list-group list-group-numbered">
        <li class="list-group-item">${quiz.op1}</li>
        <li class="list-group-item">${quiz.op2}</li>
        <li class="list-group-item">${quiz.op3}</li>
        <li class="list-group-item">${quiz.op4}</li>  
        </ol><span role="button" class='addToQuizsetBtn mt-1 btn btn-info text-center' data-id='${quiz.id}' data-q='${quiz.question}'> Add this to Quizset</span></div>`;
                    q += html;
                });
                $("#quizcontainer").html(q);
            }
            // alert(55)
            $("#showbtn").click(function() {
                // alert(5)
                $.ajax({
                    type: "get",
                    url: "{{ url('showquiz') }}",
                    data: {
                        cid: $("#category_id").val(),
                        scid: $("#subcategory_id").val(),
                        page: "1",
                    },
                    dataType: "json",
                    success: function(response) {
                        // alert(555)
                        //console.log(response);
                        //$("#quizcontainer").html(response);
                        render_quiz_questions(response);
                    }
                });
            });

            /* $("#selectedQuizContainer").on('hover','.list-group-item',function(){
                $(this).find('span').removeClass('d-none');
            },function(){
                $(this).find('span').addClass('d-none');
            }); */
            $(document).on({
                mouseenter: function() {
                    $(this).find('span').removeClass('d-none');
                },
                mouseleave: function() {
                    $(this).find('span').addClass('d-none');
                }
            }, ".list-group-item"); //pass the element as an argument to .on

            //add to quizset
            $(document).on("click", ".addToQuizsetBtn", function() {
                // alert(5);
                let id = $(this).data('id') + '.';
                let ques = $(this).data('q');
                let html =
                    `<li class="list-group-item" data-selected=${id}>${id} <span class="d-none">${ques} </span type="button" class="btn btn-danger btn-rounded text-right" data-bs-dismiss="modal"><i class="fa-solid fa-rectangle-xmark"></i></li>`;
                $("#selectedQuizContainer").append(html);

            });

            //store quizset
            $("#saveQuizsetBtn").click(function(e) {

                e.preventDefault();
                let qArr = [];
                $.each($("#selectedQuizContainer li"), function(indexInArray, valueOfElement) {
                    //console.log($(this).data('selected'));
                    qArr.push($(this).data('selected'));
                });
                $.ajax({
                    type: "post",
                    url: "{{ url('storequizset') }}",
                    data: {
                        name: $("#name").val(),
                        title: $("#title").val(),
                        cid: $("#category_id").val(),
                        scid: $("#subcategory_id").val(),
                        quiz: qArr
                    },
                    dataType: "json",
                    success: function(response) {

                    }
                });

                $(document).ready(function() {
                    // show question set update message
                    setTimeout(function() {
                        $("#saveQuizsetBtn").alert(location.reload());
                    }, 500);
                });
            });

        });
    </script>
@endsection
