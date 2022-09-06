@extends('layouts.admin')

@section('title','All Chapters')
@section('sidebar')
@include('dashboard.sidebar')
@endsection

@section('navbar')
@include('inc.admin.navbar')
@endsection

@section('content')
<div class="card card-hover shadow mb-4">
    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
        <h4 class="m-0 font-weight-bold text-info">Quiz List</h4>
        <div class="">
            <a class="btn btn-sm btn-info" href="{{url('quiz/create')}}">
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
                        <th>Id</th>
                        <th>Question</th>
                        <th>Type</th>
                        <th>Op.1</th>
                        <th>Op.2</th>
                        <th>Op.3</th>
                        <th>Op.4</th>
                        <th>Answer </th>
                        <th>User </th>
                        <th>Category</th>
                        <th>Subcategory</th>
                        <th>Topic</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tfoot>
                    <tr>
                        <th>Id</th>
                        <th>Question</th>
                        <th>Type</th>
                        <th>Op.1</th>
                        <th>Op.2</th>
                        <th>Op.3</th>
                        <th>Op.4</th>
                        <th>Answer </th>
                        <th>User </th>
                        <th>Category</th>
                        <th>Subcategory</th>
                        <th>Topic</th>
                        <th>Action</th>
                    </tr>
                </tfoot>
                <tbody>
                    @foreach ($quizzes as $quiz)
                    <tr>
                        <td>{{ $quiz->id }}</td>
                        <td>@class(['class']) {{ $quiz->question}}</td>                        
                        <td>{{ $quiz->type}}</td>                        
                        <td>{{ $quiz->op1}}</td>                        
                        <td>{{ $quiz->op2}}</td>                        
                        <td>{{ $quiz->op3}}</td>                        
                        <td>{{ $quiz->op4}}</td>                        
                        <td>{{ $quiz->ans}}</td>                        
                        <td>{{$quiz->user->name}}</td>
                        <!-- Attempt to read property "name" on null -->
                        
                        <td>{{ $quiz->category->name}}</td>
                        <td>{{ $quiz->subcategory->name}}</td>
                        <td>{{ $quiz->topic->name}}</td>
                        <td class="d-flex justify-content-center">
                            {!! Form::open(['method' => 'delete','route' => ['quiz.destroy', $quiz->id],'id'=>'deleteform']) !!}
                            <a href="javascript:void(0)" class="btn btn-danger btn-circle btn-sm" title="Delete" onclick="event.preventDefault();if (!confirm('Are you sure?')) return; document.getElementById('deleteform').submit();">
                                <i class="fa-solid fa-trash-can"></i>
                            </a>
                            {!! Form::close() !!}
                            &nbsp;
                            <a href="{{url('quiz/'.$quiz->id.'/edit')}}" class="btn btn-info btn-circle btn-sm" title="Edit">
                                <i class="fas fa-edit"></i>
                            </a>
                            
                            &nbsp;
                            <a href="{{url('quiz/'.$quiz->id)}}" class="btn btn-info btn-circle btn-sm" title="View">
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