@extends('layouts.admin')

@section('title','Show Subjeccts')
@section('sidebar')
@include('dashboard.sidebar')
@endsection

@section('navbar')
@include('inc.admin.navbar')
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h4 class="m-0 font-weight-bold text-info">Users Details</h4>
        <a href="{{url('allusers')}}" class="btn btn-info btn-circle btn-sm" title="Back to Subject">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
    <div class="card-body">
        <table class="table table-responsive">
            <tr class="table-bordered">
                <th>Id</th>
                <td>{{ $user->id }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Username</th>
                <td>{{ $user->name }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Email</th>
                <td>{{ $user->email }}</td>
            </tr>
            <tr class="table-bordered">
                <th>User Role</th>
                <td>{{ $user->role }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Description</th>
                <td>{{ $user->description }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection