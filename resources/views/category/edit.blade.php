@extends('layouts.admin')

@section('title','Category')
@section('sidebar')
@include('dashboard.sidebar')
@endsection

@section('navbar')
@include('inc.admin.navbar')
@endsection


@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h6 class="m-0 font-weight-bold text-primary">Update Class</h6>
            <a href="{{url('category')}}" class="btn btn-primary btn-circle btn-sm" title="Back to Class">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {!! Form::model($category, ['method' => 'put','enctype'=>'multipart/form-data','class'=>'user','route' => ['category.update', $category->id]]) !!}
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    {!! Form::text('name', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'name', 'placeholder'=>'Name']) !!}
                </div>
                <div class="col-sm-6">
                    {!! Form::text('description', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'description', 'placeholder'=>'Description']) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::number('active', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'active', 'max'=>'1', 'min'=>'0', 'placeholder'=>'Active']) !!}
                {{-- {!! Form::select('active', null, ['placeholder' => 'Select Category', 'class'=>'form-control']) !!} --}}
            </div>

            <div class="form-group">
                {!! Form::submit('Update Class', ['class'=>'btn btn-info btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

