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
        <a href="{{url('quiz')}}" class="btn btn-info btn-circle btn-sm" title="Back to Chapter">
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
                <th>Question:</th>
                <td>{{ $quiz->question}}</td>
            </tr>
            <tr class="table-bordered">
                <th>Type:</th>
                <td>{{ $quiz->type}}</td>
            </tr>
            <tr class="table-bordered">
                <th>Option 1:</th>
                <td>{{ $quiz->op1}}</td>
            </tr>
            <tr class="table-bordered">
                <th>Option 2:</th>
                <td>{{ $quiz->op2}}</td>
            </tr>
            <tr class="table-bordered">
                <th>Option 3:</th>
                                    
                <td>{{ $quiz->op3}}</td>  
            </tr>
            <tr class="table-bordered">
                <th>Option 3:</th>
                <td>{{ $quiz->op4}}</td> 
            </tr>
            <tr class="table-bordered">
                <th>Answer:</th>         
                <td>{{ $quiz->ans}}</td>
            </tr>
            <tr class="table-bordered">
                <th>UserID:</th>         
                <td>{{$quiz->user_id}}</td>
            </tr>
        </table>
    </div>
</div>
@endsection