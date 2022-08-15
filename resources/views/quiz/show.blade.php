@extends('layouts.admin')

@section('title','Show Chapters')
@section('sidebar')
@include('dashboard.sidebar')
@endsection

@section('navbar')
@include('inc.admin.navbar')
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <div class="card-header py-3 d-flex justify-content-between">
        <h6 class="m-0 font-weight-bold text-info">Topic Details</h6>
        <a href="{{url('topic')}}" class="btn btn-info btn-circle btn-sm" title="Back to Chapter">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
    <div class="card-body">
        <table class="table table-responsive">
            {{-- <tr class="table-bordered">
                <th>Id:</th>
                <td>{{ $topic->id }}</td>
            </tr> --}}
            <tr class="table-bordered">
                <th>Name:</th>
                <td>{{ $topic->name }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Class:</th>
                <td>{{ $topic->subcategory->name }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Active:</th>
                <td>{{ $topic->active }}</td>
            </tr>
            <tr class="table-bordered">
                <th>Description:</th>
                <td>{{ $topic->description }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection