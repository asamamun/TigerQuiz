@extends('layouts.admin')

@section('title', 'Add Classes')
@section('sidebar')
    @include('dashboard.sidebar')
@endsection

@section('navbar')
    @include('inc.admin.navbar')
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h4 class="m-0 font-weight-bold text-info"> Add Class</h4>
            <a href="{{ url('category') }}" class="btn btn-info btn-circle btn-sm" title="Back to Class List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body mt-1">
            {{ Form::open(['route' => 'category.store', 'class' => 'user', 'enctype' => 'multipart/form-data']) }}

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
                    {!! Form::select('active', [0 => 'No', 1 => 'Yes'], 1, [
                        'required',
                        'class' => 'form-control form-control-profile',
                        'id' => 'active',
                        'max' => '1',
                        'min' => '0',
                        'placeholder' => 'Active Field',
                    ]) !!}
                </div>
            </div>

            <div class="form-group">
                {!! Form::textarea('description', null, [
                    'required',
                    'class' => 'form-control form-control-profile',
                    'id' => 'description',
                    'rows' => '1',
                    'placeholder' => 'Description',
                ]) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Add Class', ['class' => 'btn btn-info']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
