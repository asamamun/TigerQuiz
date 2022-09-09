@extends('layouts.admin')

@section('title', 'Add Chapter')
@section('sidebar')
    @include('dashboard.sidebar')
@endsection

@section('navbar')
    @include('inc.admin.navbar')
@endsection

@forelse($quizset as $qset)
@php
    //  dd($qset);
@endphp
@empty
<td>Empty information.</td>
@endforelse

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-info">Edit Quizset</h6>
            <a href="{{ url('quizset') }}" class="btn btn-info btn-circle btn-sm" title="Back to Topic List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {!! Form::model($qset, [
                'method' => 'put',
                'enctype' => 'multipart/form-data',
                'class' => 'user',
                'route' => ['quizset.update', $qset->id],
            ]) !!}

            @include('partial.flash')
            @include('partial.error')

            <div class="form-group mt-1 row">
                <div class="col-sm-3 mb-2">
                    {!! Form::select('category_id', $catp, null, [
                        'required',
                        'class' => 'form-control',
                        'id' => 'category_id',
                        'placeholder' => 'Select Category',
                    ]) !!}

                </div>
                <div class="col-sm-3 mb-2 mb-sm-0">
                    {!! Form::select('subcategory_id', [], null, [
                        'required',
                        'class' => 'form-control ',
                        'id' => 'subcategory_id',
                        'placeholder' => 'Select Subcategory',
                    ]) !!}

                </div>
                <div class="col-sm-3 mb-2 mb-sm-0">
                    {!! Form::select('topic_id', [], null, [
                        'required',
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
                <div class="col-sm-3 mb-2 mb-sm-0">
                    {!! Form::text('name', null, ['class' => 'form-control','id' => 'name']) !!}
                </div>
                <div class="col-sm-3 mb-2 mb-sm-0">
                    {!! Form::text('title', null, ['class' => 'form-control','id' => 'title']) !!}
                </div>
                <div class="col-sm-6 mb-2 mb-sm-0">
                    {!! Form::textarea('quizzes', null, ['class' => 'form-control','rows' => '1','id' => 'quizzes']) !!}
                </div>
            </div>
                <div class="col-sm-3">
                    <div class=" mb-2 mb-sm-0">
                        {!! Form::hidden('user_id', Auth::user()->id, null, [
                            'required',
                            'disabled',
                            'class' => 'form-control',
                            'id' => 'user_id',
                            'placeholder' => 'User',
                        ]) !!}
                    </div>
                </div>
                <div class="form-group mt-1 row">
                    <div class="col-sm-2 mb-2 mb-sm-0">
                        {!! Form::select('active', [0 => 'No', 1 => 'Active'], 1, [
                            'required',
                            'class' => 'form-control',
                            'id' => 'active',
                            'max' => '1',
                            'min' => '0',
                        ]) !!}
                    </div>
                    <div class="col-sm-4 mb-2 mb-sm-0">
                        @if(!empty($qset->stime))
                        {!! Form::datetime('stime', null, ['class' => 'form-control','id' => 'stime','placeholder' => 'ST: 2022-08-30 09:30:00' ]) !!}
                        @else
                        <input type="datetime-local" id="stime"
                        name="stime" class='form-control'>
                        @endif
                    </div>
            
                    <div class="col-sm-4 mb-2 mb-sm-0">
                        @if(!empty($qset->stime))
                        {!! Form::datetime('entime', null, ['class' => 'form-control','id' => 'entime', 'type'=>'datetime-local','placeholder' => 'ET: 2022-08-30 10:30:00' ]) !!}
                       @else
                        <input type="datetime-local" id="entime"
                        name="entime" class='form-control'>
                        @endif
                    </div>
                    <div class="col-sm-2">
                        {!! Form::submit('Update Quiz', ['class' => 'btn btn-info btn-profile btn-block']) !!}
                        
                    </div>
                </div>
                {!! Form::close() !!}
            </div>

        </div>
    </div>
@endsection

@section('scripts')
    <script>
       

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
                        tid: $("#topic_id").val(),
                        stime: $("#stime").val(),
                        entime: $("#entime").val(),
                        quiz: qArr
                    },
                    dataType: "json",
                    success: function(response) {
                        if (response.error == "1") {
                            alert("Something went wrong!!");
                        } else {
                            location.reload();
                        }
                    }
                });


            });

            //remove quiz from list
            $(document).on("click", ".removeqbtn", function() {
                $(this).parent().parent().remove();
            });

        });
    </script>
@endsection
