@extends('layouts.admin')

@section('title','Profile')
@section('head')

@endsection
@section('sidebar')
{{-- sidebar as user role --}}
@if (Auth::user()->role == '1')
@include('dashboard.sidebar')
@elseif (Auth::user()->role == '2')
@include('inc.admin.trsidebar')
@else
@include('inc.admin.stsidebar')
@endif
@stop
<!-- end sidebar -->
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
        @if (!($user->profile->image))
        <img src="{{url(Storage::url('public/profiles/default.png'))}}" alt="{{$user->name}}" width='190px' class="rounded d-block float-start me-4 mt-2 mb-2"/>
            @else
            <img src="{{url(Storage::url('public/profiles/'.$user->profile->image))}}" alt="{{$user->name}}" width='190px' class="rounded d-block float-start me-4 mt-2 mb-2">
          @endif

        
            {{-- <img src="{{url(Storage::url('public/profiles/'.$pimg))}}" width='190px' class="rounded d-block float-start me-4 mt-2 mb-2" alt=" Profile Image"/> --}}
            <h3 class="mt-5 pt-1 text-warning">{{$user->profile->fullname}}</h3>
            <span class="text-light">{{$user->email}}</span>
        </div>
        
       </div>
        {!! Form::model($user->profile, ['method' => 'PUT','enctype'=>'multipart/form-data','class'=>'user','route' => ['profile.update', $user->profile->id]]) !!}
        @else
        {!! Form::open(['route' => ['profile.store'] ,'class'=>'user', 'enctype'=>'multipart/form-data']) !!}
        @endif
        
        
        <div class="form-group row">
            <div class="col-sm-6 mt-2 mb-2 mb-sm-0">
                {!! Form::text('fullname', null, ['required', 'class'=>'form-control', 'id'=>'name', 'placeholder'=>'Name', 'title'=>'Full Name']) !!}
            </div>
            <div class="col-sm-6 mt-2">
                {!! Form::text('institute', null, ['required', 'class'=>'form-control', 'id'=>'institute', 'placeholder'=>'Institute Name','title'=>'Institute Name']) !!}
            </div>
        </div>
        
            <span class="hidden">
                <div class="form-group row">
                @if (Route::has('login'))
                @auth
                @if (Auth::user()->role == '3')
                <div class="col-sm-4 mb-2 mb-sm-0">
                    {!! Form::select('category_id', $categories, null, [ 'class'=>'form-control', 'id'=>'category_id', 'placeholder'=>'Select Class','title'=>'Class Name']) !!}
                </div>
                <div class="col-sm-4">
                    {!! Form::text('batch', null, ['class'=>'form-control','id'=>'batch', 'placeholder'=>'Batch or Room','title'=>'Batch Name']) !!}
                </div>
                @else
                <div class="col-sm-4 mb-2 mb-sm-0">
                 {!! Form::text('designation', null, ['required', 'class'=>'form-control', 'id'=>'designation', 'placeholder'=>'Designation','title'=>'Designation']) !!}
                </div>
                <div class="col-sm-4">
                {!! Form::text('subject', null, ['required', 'class'=>'form-control', 'id'=>'subject', 'placeholder'=>'Subject','title'=>'Subject']) !!}
            </div>
                @endif
                @endauth
                @endif
                <div class="col-sm-4">
                    {!! Form::text('phone', null, ['required', 'class'=>'form-control', 'id'=>'phone', 'placeholder'=>'Phone Number','title'=>'Phone Number']) !!}
                </div>
            </div>
              </span>
           <div class="form-group row">
           <div>
            {!! Form::text('address', null, ['required', 'class'=>'form-control', 'id'=>'address', 'placeholder'=>'Address','title'=>'Full Address']) !!}
           </div>
        </div>     
         <div class="form-group row">
            <div class="col-sm-4 mb-2 mb-sm-0">
                {!! Form::select('gender', ['Male'=>'Male', 'Female'=>'Female','Others'=>'Others'],null, ['class'=>'form-control','id'=>'gender', 'placeholder'=>'Select Gender','title'=>'Gender']) !!}
                </div>
                <div class="col-sm-4">
                {!! Form::select('bloodgroup', $bloodgroup, null, ['required', 'id'=>'bloodgroup', 'placeholder' => 'Blood Group', 'class'=>'form-control','title'=>'Blood Group']) !!}
            </div>
            <div class="col-sm-4">
                {!! Form::file('image', ['class'=>'form-control', 'id'=>'image','title'=>'Profile Picture']) !!}
            </div>
        </div>
        <div class="form-group row">
            <div>
            {!! Form::textarea('bio', null, ['required', 'class'=>'form-control', 'id'=>'bio', 'rows'=>'2','placeholder'=>'Bio','title'=>'Biography'])!!}
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
                     {!! Form::text('guardianname', null, ['required', 'class'=>'form-control', 'id'=>'gname', 'placeholder'=>"Guardian's Name",'title'=>"Guardian's Name"]) !!}
                 </div>
                 <div class="col-sm-4 mt-2 mb-2 mb-sm-0">
                     {!! Form::text('guardianphone', null, ['required', 'class'=>'form-control', 'id'=>'gphone', 'placeholder'=>"Guardian's Phone", 'title'=>"Guardian's Phone"]) !!}
                 </div>
                 <div class="col-sm-4 mt-2">
                     {!! Form::text('guardianemail', null, ['class'=>'form-control', 'id'=>'gemail', 'placeholder'=>"Guardian's Email",'title'=>"Guardian's Email"]) !!}
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
            {!! Form::text('fb', null, ['class'=>'form-control', 'id'=>'fb', 'placeholder'=>'Facebook','title'=>"Facebook"]) !!}
        </div>
        <div class="col-sm-4 mt-2 mb-2 mb-sm-0">
            {!! Form::text('yt', null, ['class'=>'form-control', 'id'=>'yt', 'placeholder'=>'Youtube','title'=>"Youtube"]) !!}
        </div>
        <div class="col-sm-4 mt-2">
            {!! Form::text('in', null, ['class'=>'form-control', 'id'=>'in', 'placeholder'=>'Linkin','title'=>"Linkin"]) !!}
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