@extends('layouts.admin')

@section('title','All Subjeccts')
@section('sidebar')
@include('dashboard.sidebar')
@endsection

@section('navbar')
@include('inc.admin.navbar')
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
      <div>

        <a class="btn btn-sm btn-info" href="{{url('allusers')}}">Students</a>
       <button class="btn btn-sm btn-primary" title="Total Students">  {{DB::table('users')->where('role','=','3')->count();}} </button>
    
    </div>
    <div class="">
    <button class="btn btn-sm btn-primary" title="Total Teachers"> {{DB::table('users')->where('role','=','2')->count();}} </button>
     
     </div>
    </div>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>User Role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($allusers as $users)
                    <tr>
                        <td>{{ $users->id }}</td>
                        <td>{{ $users->name }}</td>                        
                        <td>{{ $users->email}}</td>          
                        <td>{{ $users->role }}</td>
                        <td class="d-flex justify-content-center">
                            {{-- onclick="event.preventDefault(); document.getElementById('submit-form').submit();" --}}
                            {!! Form::open(['method' => 'delete','route' => ['allusers.destroy', $users->id],'id'=>'deleteform']) !!}
                            <a href="javascript:void(0)" class="btn btn-danger btn-circle btn-sm" title="Delete" onclick="event.preventDefault();if (!confirm('Are you sure?')) return; document.getElementById('deleteform').submit();">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                            {!! Form::close() !!}
                            &nbsp;
                            <a href="{{url('allusers/'.$users->id.'/edit')}}" class="btn btn-info btn-circle btn-sm" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            &nbsp;
                            <a href="{{url('allusers/'.$users->id)}}" class="btn btn-info btn-circle btn-sm" title="View">
                                <i class="fas fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection