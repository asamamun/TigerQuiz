@extends('layouts.admin')

@section('title','Profile')
@section('head')

@endsection
@section('sidebar')
@include('dashboard.sidebar')
@stop
@section('navbar')
@include('inc.admin.navbar')
@stop
@section('content')
<div class="card card-hover shadow mb-4">
    <div class="card-header bg-info py-2 mb-2 mb-sm-0 d-flex justify-content-between">
        <h5 class="m-0 font-weight-bold text-light">Profile of {{Auth::user()->name}}</h5>
        <a href="./profile" class="btn btn-info btn-circle btn-sm" title="Refresh">
            <i class="fa fa-refresh"></i></a>
    </div>
    <div class="card-body">
        @include('partial.flash')
        @include('partial.error')
        @if ($user->profile)
       <div class="form-group row mt-2 bg-image rounded bg-info ">
        
        <div class="my-1">
            <img src="{{url(Storage::url($user->profile->image))}}" width='190px' class="rounded d-block float-start mt-2 mb-2 alt="Profile Image">
            
        </div>
        
       </div>
        {!! Form::model($user->profile, ['method' => 'PUT','enctype'=>'multipart/form-data','class'=>'user','route' => ['profile.update', $user->profile->id]]) !!}
        @else
        {!! Form::open(['route' => ['profile.store'] ,'class'=>'user', 'enctype'=>'multipart/form-data']) !!}
        @endif
        
        
        <div class="form-group row">
            <div class="col-sm-6 mt-2 mb-2 mb-sm-0">
                {!! Form::text('fullname', null, ['required', 'class'=>'form-control', 'id'=>'name', 'placeholder'=>'Name']) !!}
            </div>
            <div class="col-sm-6 mt-2">
                {!! Form::text('institute', null, ['required', 'class'=>'form-control', 'id'=>'institute', 'placeholder'=>'Institute Name']) !!}
            </div>
        </div>
        
            <span class="hidden">
                <div class="form-group row">
                @if (Route::has('login'))
                @auth
                @if (Auth::user()->role == '3')
                <div class="col-sm-4 mb-2 mb-sm-0">
                    {!! Form::select('category_id', $categories, null, [ 'class'=>'form-control', 'id'=>'category_id', 'placeholder'=>'Select Class']) !!}
                </div>
                <div class="col-sm-4">
                    {!! Form::text('classroom', null, [ 'disabled','class'=>'form-control','id'=>'classroom', 'placeholder'=>'Total Class Rooms: 12']) !!}
                </div>
                @else
                <div class="col-sm-4 mb-2 mb-sm-0">
                 {!! Form::text('designation', null, ['required', 'class'=>'form-control', 'id'=>'designation', 'placeholder'=>'Designation']) !!}
                </div>
                <div class="col-sm-4">
                {!! Form::text('subject', null, ['required', 'class'=>'form-control', 'id'=>'subject', 'placeholder'=>'Subject']) !!}
            </div>
                @endif
                @endauth
                @endif
                <div class="col-sm-4">
                    {!! Form::text('phone', null, ['required', 'class'=>'form-control', 'id'=>'phone', 'placeholder'=>'Phone Number']) !!}
                </div>
            </div>
              </span>
           <div class="form-group row">
           <div>
            {!! Form::text('address', null, ['required', 'class'=>'form-control', 'id'=>'address', 'placeholder'=>'Address']) !!}
           </div>
        </div>     
         <div class="form-group row">
            <div class="col-sm-6 mb-2 mb-sm-0">
                {!! Form::select('bloodgroup', $bloodgroup, null, ['required', 'id'=>'bloodgroup', 'placeholder' => 'Blood Group', 'class'=>'form-control']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::file('image', ['class'=>'form-control', 'id'=>'image']) !!}
            </div>
        </div>
        <div class="form-group row">
            <div>
            {!! Form::textarea('bio', null, ['required', 'class'=>'form-control', 'id'=>'bio', 'rows'=>'2',  'placeholder'=>'Bio']) !!}
        </div>
        </div>
        <span class="hidden">
        @if (Route::has('login'))
        @auth
        @if (Auth::user()->role == '3')
        <div class="d-grid gap-2">
            <button class="btn btn-sm btn-info" type="button">Information of Guardian</button>
        </div>
            <div class="form-group row">
                 <div class="col-sm-4 mt-2 mb-2 mb-sm-0">
                     {!! Form::text('guardianname', null, ['required', 'class'=>'form-control', 'id'=>'gname', 'placeholder'=>"Guardian's name"]) !!}
                 </div>
                 <div class="col-sm-4 mt-2 mb-2 mb-sm-0">
                     {!! Form::text('guardianphone', null, ['required', 'class'=>'form-control', 'id'=>'gphone', 'placeholder'=>"Guardian's Phone"]) !!}
                 </div>
                 <div class="col-sm-4 mt-2">
                     {!! Form::text('guardianemail', null, ['class'=>'form-control', 'id'=>'gemail', 'placeholder'=>"Guardian's Email"]) !!}
                 </div>
             </div>
        @endif
        @endauth
        @endif
      </span>
      <div class="d-grid gap-2">
        <button class="btn btn-sm btn-info" type="button">Social Media</button>
      </div>
    <div class="form-group row">
        <div class="col-sm-4 mt-2 mb-2 mb-sm-0">
            {!! Form::text('fb', null, ['class'=>'form-control', 'id'=>'fb', 'placeholder'=>'Facebook']) !!}
        </div>
        <div class="col-sm-4 mt-2 mb-2 mb-sm-0">
            {!! Form::text('yt', null, ['class'=>'form-control', 'id'=>'yt', 'placeholder'=>'Youtube']) !!}
        </div>
        <div class="col-sm-4 mt-2">
            {!! Form::text('in', null, ['class'=>'form-control', 'id'=>'in', 'placeholder'=>'Linkin']) !!}
        </div>
    </div>
        
       <div class="form-group row">
        {{-- <div class="col-sm-6 mb-2 mb-sm-0">
            {!! Form::reset('Reset', ['class'=>'btn btn-info btn-sm btn-block']) !!}
        </div> --}}
        <div class="text-center">
            {!! Form::submit('Update Profile', ['class'=>'btn btn-info btn-sm btn-block']) !!}
        </div>
       </div>
        
        {!! Form::close() !!}


</div>
@endsection