@extends('layouts.admin')

@section('title','Profile')
@section('sidebar')
@include('inc.admin.sidebar')
@stop
@section('navbar')
@include('inc.admin.navbar')
@stop
@section('content')
<div class="card card-hover shadow mb-4">
    <div class="card-header bg-info py-3 mb-2 mb-sm-0 d-flex justify-content-between">
        <h5 class="m-0 font-weight-bold text-light">Profile of {{Auth::user()->name}}</h5>
        <a href="./profile" class="btn btn-primary btn-circle btn-sm" title="Refresh">
            <i class="fa fa-refresh"></i></a>
    </div>
    <div class="card-body">
        @include('partial.flash')
        @include('partial.error')

        @if ($user->profile)
        <div class="mb-2">
            <img src="{{url(Storage::url($user->profile->image))}}" class="rounded float-start mt-2 mb-2" alt="Profile Image">
        </div>
        {!! Form::model($user->profile, ['method' => 'PUT','enctype'=>'multipart/form-data','class'=>'user','route' => ['profile.update', $user->profile->id]]) !!}
        @else
        {!! Form::open(['route' => ['profile.store'] ,'class'=>'user', 'enctype'=>'multipart/form-data']) !!}
        @endif
        
        
        <div class="form-group row">
            <div class="col-sm-6 mt-2 mb-2 mb-sm-0">
                {!! Form::text('fullname', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'name', 'placeholder'=>'Name']) !!}
            </div>
            <div class="col-sm-6 mt-2">
                {!! Form::text('institute', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'institute', 'placeholder'=>'Institute Name']) !!}
            </div>
        </div>
        <div class="form-group row">
            <div class="col-sm-4 mb-2 mb-sm-0">
                {!! Form::text('designation', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'designation', 'placeholder'=>'Designation']) !!}
            </div>
            <div class="col-sm-4 mb-2 mb-sm-0">
                {!! Form::text('subject', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'subject', 'placeholder'=>'Subject']) !!}
            </div>
            <div class="col-sm-4">
                {!! Form::text('phone', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'phone', 'placeholder'=>'Phone Number']) !!}
            </div>
        </div>
        <div class="form-group row">
           <div>
            {!! Form::text('address', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'address', 'placeholder'=>'Address']) !!}
           </div>
        </div>
        

        <div class="form-group row">
            <div class="col-sm-6 mb-2 mb-sm-0">
                {!! Form::select('bloodgroup', $bloodgroup, null, ['required', 'placeholder' => 'Blood Group', 'class'=>'form-control form-control-profile']) !!}
            </div>
            <div class="col-sm-6">
                {!! Form::file('image', ['required', 'class'=>'form-control form-control-profile', 'id'=>'image']) !!}
            </div>
        </div>
        <div class="form-group row">
            <div>
            {!! Form::textarea('bio', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'bio', 'rows'=>'2',  'placeholder'=>'Bio']) !!}
        </div>
        </div>
      <span class="hidden">
        @if (Route::has('login'))
        @auth
        @if (Auth::user()->role == '3')
        <div class="btn btn-sm mb-1 mb-sm-0 bg-info">Information of Guardian</div>
            <div class="form-group row">
                
                 <div class="col-sm-4 mt-2 mb-2 mb-sm-0">
                     {!! Form::text('Guardian name', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'gname', 'placeholder'=>"Guardian's name"]) !!}
                 </div>
                 <div class="col-sm-4 mt-2 mb-2 mb-sm-0">
                     {!! Form::text('Guardian Phone', null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'gphone', 'placeholder'=>"Guardian's Phone"]) !!}
                 </div>
                 <div class="col-sm-4 mt-2">
                     {!! Form::text('Guardian Email', null, ['class'=>'form-control form-control-profile', 'id'=>'gemail', 'placeholder'=>"Guardian's Email"]) !!}
                 </div>
             </div>
        @endif
        @endauth
        @endif
      </span>
        
    <div class="form-group row">
       <div class="btn btn-sm mb-1 mb-sm-0 bg-info">Social Media</div>
        <div class="col-sm-4 mt-2 mb-2 mb-sm-0">
            {!! Form::text('facebook', null, ['class'=>'form-control form-control-profile', 'id'=>'facebook', 'placeholder'=>'Facebook']) !!}
        </div>
        <div class="col-sm-4 mt-2 mb-2 mb-sm-0">
            {!! Form::text('youtube', null, ['class'=>'form-control form-control-profile', 'id'=>'youtube', 'placeholder'=>'Youtube']) !!}
        </div>
        <div class="col-sm-4 mt-2">
            {!! Form::text('linkin', null, ['class'=>'form-control form-control-profile', 'id'=>'linkin', 'placeholder'=>'Linkin']) !!}
        </div>
    </div>
        
       <div class="form-group row">
        {{-- <div class="col-sm-6 mb-2 mb-sm-0 text-center">
            {!! Form::reset('Reset', ['class'=>'btn btn-primary btn-sm btn-block']) !!}
        </div> --}}
        <div class=" text-center">
            {!! Form::submit('Update Profile', ['class'=>'btn btn-primary btn-sm btn-block']) !!}
        </div>
       </div>
        
        {!! Form::close() !!}


</div>
@endsection