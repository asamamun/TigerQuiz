@extends('layouts.admin')

@section('title', 'Edit Class')
@section('sidebar')
    @include('dashboard.sidebar')
@endsection

@section('navbar')
    @include('inc.admin.navbar')
@endsection


@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h4 class="m-0 font-weight-bold text-info">Update Class</h4>
            <a href="{{ url('category') }}" class="btn btn-info btn-circle btn-sm" title="Back to Class">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {!! Form::model($category, [
                'method' => 'put',
                'enctype' => 'multipart/form-data',
                'class' => 'user',
                'route' => ['category.update', $category->id],
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
            <div class="form-group">
                {!! Form::select('active', [0 => 'No', 1 => 'Yes'], 1, [
                    'required',
                    'class' => 'form-control form-control-profile',
                    'id' => 'active',
                    'max' => '1',
                    'min' => '0',
                    'placeholder' => 'Active Field',
                ]) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Update Class', ['class' => 'btn btn-info btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
