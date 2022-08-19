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
        <h6 class="m-0 font-weight-bold text-info">Quizset Details</h6>
        <a href="{{url('quizset')}}" class="btn btn-info btn-circle btn-sm" title="Back to Chapter">
            <i class="fas fa-arrow-left"></i>
        </a>
    </div>
    <div class="card-body">
        <table class="table table-responsive">
          
            <tr class="table-bordered">
                <th>Name:</th>
                <td>{{ $qset->name}}</td>   
            </tr>
            <tr class="table-bordered">
                <th>Title:</th>
                <td>{{ $qset->title }}</td>
            </tr>
            <tr class="table-bordered">
                <th>User ID:</th>
                <td>{{ $qset->user_id}}</td>   
            </tr>
            <tr class="table-bordered">
                <th>Quizzes:</th>            
                <td>{{ $qset->quizzes}}</td>                        
            </tr>
            
            <tr class="table-bordered">
                <th>Category ID:</th>
                <td>{{ $qset->category->id}}</td>
             
            </tr>
            <tr class="table-bordered">
                <th>Subsategory ID:</th>         
                <td>{{ $qset->subcategory->id }}</td>
            </tr>
        </table>
    </div>
</div>
@endsection