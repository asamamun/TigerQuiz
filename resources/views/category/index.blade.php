@extends('layouts.admin')

@section('title','All Classes')
@section('sidebar')
@include('dashboard.sidebar')
@endsection

@section('navbar')
@include('inc.admin.navbar')
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <!-- Card Header - Dropdown -->
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h4 class="m-0 font-weight-bold text-info">List of Classes</h4>
        <div class="">
            <a class="btn btn-sm btn-info" href="{{url('category/create')}}">
                <i class="fa-solid fa-plus"></i> 
                Add
            </a>
        </div>
    </div>
    <!-- Card Body -->
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Active</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Active</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($categories as $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td>{{ $category->active }}</td>
                        <td>{{ $category->description }}</td>
                        <td class="d-flex justify-content-center">
                            {!! Form::open(['method' => 'delete','route' => ['category.destroy', $category->id],'id'=>'deleteform']) !!}
                            <a href="javascript:void(0)" class="btn btn-danger btn-circle btn-sm" title="Delete" onclick="event.preventDefault();if (!confirm('Are you sure?')) return; document.getElementById('deleteform').submit();">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                            {!! Form::close() !!}
                            &nbsp;
                            <a href="{{url('category/'.$category->id.'/edit')}}" class="btn btn-info btn-circle btn-sm" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                        &nbsp;
                            <a href="{{url('category/'.$category->id)}}" class="btn btn-info btn-circle btn-sm" title="View">
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
