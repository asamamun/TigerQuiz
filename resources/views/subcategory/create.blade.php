@extends('layouts.admin')

@section('title','Add Subject')
@section('sidebar')
@include('dashboard.sidebar')
@endsection

@section('navbar')
@include('inc.admin.navbar')
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h4 class="m-0 font-weight-bold text-info">Add Subject</h4>
            <a href="{{url('subcategory')}}" class="btn btn-info btn-circle btn-sm" title="Back to Subject List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {{Form::open(['route' => 'subcategory.store','class'=>'user','enctype'=>'multipart/form-data'])}}
            {{-- @include('subcategory.form') --}}
            @include('partial.flash')
            @include("partial.error")

<div class="form-group row">
    <div class="col-sm-6 mb-3 mb-sm-0">
        {!! Form::select('category_id', $categories, null, ['placeholder' => 'Select Class', 'id'=>'category_id', 'class'=>'form-control w-full']) !!}
    </div>
    <div class="col-sm-6">
        {!! Form::text('name', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'name', 'placeholder'=>'Name']) !!}
    </div>
</div>
<div class="form-group row">
<div class="col-sm-6 mb-3 mb-sm-0">
    {!! Form::textarea('description', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'description','rows'=>'1', 'placeholder'=>'Description']) !!}
</div>
<div class="col-sm-6">
    {!! Form::select('active', [0=>'No', 1=>'Yes'], 1, ['required', 'class'=>'form-control form-control-profile', 'id'=>'active', 'max'=>'1', 'min'=>'0', 'placeholder'=>'Active Field']) !!}
</div>
</div>


            <div class="form-group">
                {!! Form::submit('Add Class', ['class'=>'btn btn-info btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

