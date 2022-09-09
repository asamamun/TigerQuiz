@extends('layouts.admin')

@section('title', 'Show Classes')
@section('sidebar')
    @include('dashboard.sidebar')
@endsection

@section('navbar')
    @include('inc.admin.navbar')
@endsection


@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex justify-content-between">
            <h4 class="m-0 font-weight-bold text-info">Class Details</h4>
            <a href="{{ url('category') }}" class="btn btn-info btn-circle btn-sm" title="Back to Class">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            <table class="table table-responsive">
                <tr class="table-bordered">
                    <th>Id:</th>
                    <td>{{ $category->id }}</td>
                </tr>
                <tr class="table-bordered">
                    <th>Name:</th>
                    <td>{{ $category->name }}</td>
                </tr>
                <tr class="table-bordered text-start">
                    <th>Active:</th>
                    <td>
                    <td>{{ $category->active }}</td>
                    </td>
                </tr>
                <tr class="table-bordered">
                    <th>Description:</th>
                    <td>{{ $category->description }}</td>
                </tr>
            </table>
        </div>
    </div>
@endsection
