@extends('layouts.admin')

@section('title', 'Edit Chapter')
@section('sidebar')
    @include('dashboard.sidebar')
@endsection

@section('navbar')
    @include('inc.admin.navbar')
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h4 class="m-0 font-weight-bold text-info">Update Quiz</h4>
            <a href="{{ url('quiz') }}" class="btn btn-info btn-circle btn-sm" title="Back to Subject">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {!! Form::model($quiz, [
                'method' => 'put',
                'enctype' => 'multipart/form-data',
                'class' => 'user',
                'route' => ['quiz.update', $quiz->id],
            ]) !!}

            @include('partial.flash')
            @include('partial.error')


            <div class="form-group mt-1 row">
                <div class="col-sm-3 mb-2">
                    {!! Form::select('category_id', $cat, null, ['disabled', 'class' => 'form-control btn btn-sm mb-1']) !!}
                    {!! Form::select('category_id', $cat, null, [
                        'required',
                        'class' => 'form-control',
                        'id' => 'category_id',
                        'placeholder' => 'Select Category',
                    ]) !!}

                </div>
                <div class="col-sm-3 mb-2 mb-sm-0">
                    @if (!$quiz->subcategory_id == '0')
                        {!! Form::select('subcategory_id', $subcat, null, ['disabled', 'class' => 'form-control btn btn-sm mb-1']) !!}
                    @else
                        <input type="text" disabled value='Null' class='form-control btn btn-sm mb-1'>
                    @endif
                    {!! Form::select('subcategory_id', [], null, [
                        // 'required',
                        'class' => 'form-control ',
                        'id' => 'subcategory_id',
                        'placeholder' => 'Select Subcategory',
                    ]) !!}

                </div>
                <div class="col-sm-3 mb-2 mb-sm-0">
                    @if (!$quiz->topic_id == '0')
                        {!! Form::select('topic_id', $topics, null, ['disabled', 'class' => 'form-control btn btn-sm mb-1']) !!}
                    @else
                        <input type="text" disabled value='Null' class='form-control btn btn-sm mb-1'>
                    @endif
                    {!! Form::select('topic_id', [], null, [
                        // 'required',
                        'placeholder' => 'Select Topic',
                        'class' => 'form-control',
                        'id' => 'topic_id',
                        'placeholder' => 'Select Topic',
                    ]) !!}

                </div>
                <div class="col-sm-3 mb-2 mb-sm-0">
                    {!! Form::select('type', ['m' => 'MCQ', 'd' => 'Descriptive', 'qi' => 'Image'], 'm', [
                        'required',
                        'class' => 'form-control form-control-profile',
                        'id' => 'type',
                        'rows' => '1',
                    ]) !!}
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
                    <span class='btn border me-1'>{!! Form::checkbox('ques[]', 'op1', null, ['id' => 'ques1']) !!}</span>
                    {!! Form::text('op1', null, ['placeholder' => 'Option 1', 'id' => 'op1', 'class' => 'form-control']) !!}
                </div>
                <div class="col-sm-6 d-flex align-self-center">
                    <span class='btn border me-1'>{!! Form::checkbox('ques[]', 'op2', null, ['id' => 'ques2']) !!}</span>
                    {!! Form::text('op2', null, ['placeholder' => 'Option 2', 'id' => 'op2', 'class' => 'form-control']) !!}
                </div>
            </div>

            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0 d-flex align-self-center">
                    <span class='btn border me-1'>{!! Form::checkbox('ques[]', 'op3', null, ['id' => 'ques3']) !!}</span>
                    {!! Form::text('op3', null, [
                        'required',
                        'class' => 'form-control',
                        'id' => 'op3',
                        'max' => '1',
                        'min' => '0',
                        'placeholder' => 'Option 3',
                    ]) !!}
                </div>

                <div class="col-sm-6 d-flex align-self-center">
                    <span class='btn border me-1'>{!! Form::checkbox('ques[]', 'op4', null, ['id' => 'ques4']) !!}</span>
                    {!! Form::text('op4', null, ['required', 'class' => 'form-control', 'id' => 'op4', 'placeholder' => 'Option 4']) !!}
                </div>
            </div>

            <div class="form-group">
                <div class=" mb-3 mb-sm-0 d-flex justify-content-between">
                    {!! Form::text('answer', $quiz->ans, ['disabled', 'class' => 'form-control btn me-5 btn-info']) !!}
                    {!! Form::submit('Update Quiz', ['class' => 'btn btn-info btn-profile btn-block']) !!}
                </div>
            </div>

            {{-- <div class="form-group">
                {!! Form::submit('Update Subject', ['class'=>'btn btn-info btn-profile btn-block']) !!}
            </div> --}}
            {!! Form::close() !!}
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
           
        });
    </script>
@endsection
