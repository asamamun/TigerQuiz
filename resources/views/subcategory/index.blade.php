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
        <h4 class="m-0 font-weight-bold text-info">Subject List</h4>
        <div class="">
            <a class="btn btn-sm btn-info" href="{{url('subcategory/create')}}">
                <i class="fa-solid fa-plus"></i> 
                Add
            </a>
        </div>
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
                        <th>Subject</th>
                        <th>Active</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>#</th>
                        <th>Name</th>
                        <th>Subject</th>
                        <th>Active</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($allsubcat as $subcat)
                    <tr>
                        <td>{{ $subcat->id }}</td>
                        <td>{{ $subcat->name }}</td>                        
                        <td>{{ $subcat->category->name}}</td>          
                        <td>{{ $subcat->active }}</td>
                        <td>{{ $subcat->description }}</td>
                        <td class="skip d-flex justify-content-center">
                            {{-- onclick="event.preventDefault(); document.getElementById('submit-form').submit();" --}}
                            {!! Form::open(['method' => 'delete','route' => ['subcategory.destroy', $subcat->id],'id'=>'deleteform']) !!}
                            <a href="javascript:void(0)" class="btn btn-danger btn-circle btn-sm" title="Delete" onclick="event.preventDefault();if (!confirm('Are you sure?')) return; document.getElementById('deleteform').submit();">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                            {!! Form::close() !!}
                            &nbsp;
                            <a href="{{url('subcategory/'.$subcat->id.'/edit')}}" class="btn btn-info btn-circle btn-sm" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            &nbsp;
                            <a href="{{url('subcategory/'.$subcat->id)}}" class="btn btn-info btn-circle btn-sm" title="View">
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