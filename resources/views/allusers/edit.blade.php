@extends('layouts.admin')

@section('title','Edit Users')
@section('sidebar')
@include('dashboard.sidebar')
@endsection

@section('navbar')
@include('inc.admin.navbar')
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h4 class="m-0 font-weight-bold text-info">Update Users</h4>
            <a href="{{url('allusers')}}" class="btn btn-info btn-circle btn-sm" title="Back to Subject">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {!! Form::model($user, ['method' => 'put','enctype'=>'multipart/form-data','class'=>'user','route' => ['allusers.update', $user->id]]) !!}
             @include('partial.flash')
            @include("partial.error")

<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
       
        {!! Form::text('name', null, ['required', 'class'=>'form-control', 'id'=>'name']) !!}
    </div>
    <div class="col-sm-6">
        {!! Form::text('description', null, ['class'=>'form-control form-control-profile', 'id'=>'description']) !!}
    </div>
</div>
<div class="form-group row">
<div class="col-sm-6 mb-3 mb-sm-0">
    {!! Form::email('email', ['required','id'=>'email', 'class'=>'form-control'])!!}
</div>
<div class="col-sm-6">

    {!! Form::select( 'role', 'required', ['1'=>'Admin', '2'=>'Theacher', '3'=>'Student'], ['class'=>'form-control', 'id'=>'role', 'max'=>'4', 'min'=>'1']) !!}
</div>
</div>

            <div class="form-group">
                {!! Form::submit('Update', ['class'=>'btn btn-info btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

