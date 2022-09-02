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
            {{ Form::open(['route' => 'quiz.store', 'class' => 'user', 'enctype' => 'multipart/form-data']) }}

            @include('partial.flash')
            @include('partial.error')


            <div class="form-group mt-1 row">
                <div class="col-sm-3 mb-3">
                    {!! Form::select('category_id', $categories, null, [
                        'required',
                        'class' => 'form-control form-control-profile',
                        'id' => 'category_id',
                        'placeholder' => 'Category',
                    ]) !!}

                </div>
                <div class="col-sm-3 mb-3 mb-sm-0">
                    {!! Form::select('subcategory_id', $subcategories, null, [
                        'required',
                        'class' => 'form-control form-control-profile',
                        'id' => 'subcategory_id',
                        'placeholder' => 'Subcategory',
                    ]) !!}

                </div>
                <div class="col-sm-3 mb-3 mb-sm-0">
                    {!! Form::select('topic_id', $topics, null, [
                        'required',
                        'class' => 'form-control form-control-profile',
                        'id' => 'topic_id',
                        'placeholder' => 'Topic',
                    ]) !!}

                </div>
                <div class="col-sm-3 mb-3 mb-sm-0">
                    {!! Form::select('type', ['m' => 'MCQ', 'd' => 'Descriptive', 'qi' => 'Image'], 'm', [
                        'required',
                        'class' => 'form-control form-control-profile',
                        'id' => 'type',
                        'rows' => '1',
                    ]) !!}
                </div>
            </div>

            {{-- <div id="imagecontainer" class="row">
            <div class="col-sm-12 mb-3 mb-sm-0">
             <input type="file" class="form-control" name="quizimage" id="quizimage">
            </div>
            </div> --}}
            <div id="imagecontainer" class="form-group row">
                <div class="mb-3 mb-sm-0">
                    {!! Form::file('quizimage', ['class' => 'form-control', 'id' => 'quizimage', 'title' => 'Quiz Picture']) !!}
                </div>
            </div>

            <div class="form-group row">
                <div class="mb-3 mb-sm-0">
                    {!! Form::textarea('question', null, [
                        'required',
                        'class' => 'form-control form-control-profile',
                        'id' => 'question',
                        'rows' => '1',
                        'placeholder' => 'Question',
                    ]) !!}
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0 d-flex align-self-center">
                    <span class='btn border me-1'>{!! Form::checkbox('ques[]', 'op1', null) !!}</span>
                    {!! Form::text('op1', null, ['placeholder' => 'A.', 'id' => 'op1', 'class' => 'form-control']) !!}
                </div>
                <div class="col-sm-6 d-flex align-self-center">
                    <span class='btn border me-1'>{!! Form::checkbox('ques[]', 'op2', null) !!}</span>
                    {!! Form::text('op2', null, ['placeholder' => 'B.', 'id' => 'op2', 'class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0 d-flex align-self-center">
                    <span class='btn border me-1'>{!! Form::checkbox('ques[]', 'op3', null) !!}</span>
                    {!! Form::text('op3', null, [
                        'required',
                        'class' => 'form-control',
                        'id' => 'op3',
                        'max' => '1',
                        'min' => '0',
                        'placeholder' => 'C.',
                    ]) !!}
                </div>
                <div class="col-sm-6 d-flex align-self-center">
                    <span class='btn border me-1'>{!! Form::checkbox('ques[]', 'op4', null) !!}</span>
                    {!! Form::text('op4', null, ['required', 'class' => 'form-control', 'id' => 'op4', 'placeholder' => 'D.']) !!}
                </div>
            </div>


            <div class="form-group row">
                <div class=" mb-3 mb-sm-0">
                    {!! Form::hidden('user_id', Auth::user()->id, null, [
                        'required',
                        'disabled',
                        'class' => 'form-control',
                        'id' => 'user_id',
                        'placeholder' => 'User',
                    ]) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::submit('Add Quiz', ['class' => 'btn btn-info']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
    </div>
    </div>
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
            $("#imagecontainer").hide();

            $('#type').on('change', function(e) {
                if ($(this).val() == "qi") {
                    $("#imagecontainer").show(100);
                } else {
                    $("#imagecontainer").hide(100);
                }
            });


            $('#category').on('change', function(e) {

                var id = e.target.value;

                $.ajax({

                    url: "{{ route('subcat') }}",
                    type: "POST",
                    data: {
                        id: id
                    },

                    success: function(data) {

                        $('#subcategory').empty();

                        $.each(data.subcategories[0].subcategories, function(creat,
                        subcategory) {

                            $('#subcategory').append('<option value="' + subcategory
                                .id + '">' + subcategory.name + '</option>');
                        })

                    }
                })
            });

        });
    </script>
@endsection
