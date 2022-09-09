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
            <h6 class="m-0 font-weight-bold text-info">Update Subject</h6>
            <a href="{{ url('topic') }}" class="btn btn-info btn-circle btn-sm" title="Back to Subject">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {!! Form::model($topic, [
                'method' => 'put',
                'enctype' => 'multipart/form-data',
                'class' => 'user',
                'route' => ['topic.update', $topic->id],
            ]) !!}
            @include('partial.flash')
            @include('partial.error')

            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    {!! Form::text('name', null, [
                        'required',
                        'class' => 'form-control form-control-profile',
                        'id' => 'name',
                        'placeholder' => 'Name',
                    ]) !!}
                </div>
                <div class="col-sm-6">
                    {!! Form::text('description', null, [
                        'required',
                        'class' => 'form-control form-control-profile',
                        'id' => 'description',
                        'placeholder' => 'Description',
                    ]) !!}
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    {!! Form::select('category_id', $categories, null, [
                        'placeholder' => 'Select Class',
                        'id' => 'category_id',
                        'class' => 'form-control',
                    ]) !!}
                </div>
                <div class="col-sm-4">
                    {!! Form::select('subcategory_id', [], null, [
                        'placeholder' => 'Select Subject',
                        'id' => 'subcategory_id',
                        'class' => 'form-control',
                    ]) !!}
                </div>
                <div class="col-sm-4">
                    {!! Form::select('active', [0 => 'No', 1 => 'Yes'], 1, [
                        'required',
                        'class' => 'form-control form-control-profile',
                        'id' => 'active',
                        'max' => '1',
                        'min' => '0',
                        'value' => '[0,1]',
                        'placeholder' => 'Active Field',
                    ]) !!}
                    {{-- {!! Form::select('active', null, ['placeholder' => 'Select Category', 'class'=>'form-control']) !!} --}}
                </div>
            </div>

            <div class="form-group">
                {!! Form::submit('Update Subject', ['class' => 'btn btn-info btn-profile btn-block']) !!}
            </div>
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


        });
    </script>
@endsection
