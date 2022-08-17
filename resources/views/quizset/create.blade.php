@extends('layouts.admin')

@section('title','Add Chapter')
@section('sidebar')
@include('dashboard.sidebar')
@endsection

@section('navbar')
@include('inc.admin.navbar')
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-info">Add Quiz</h6>
            <a href="{{url('quiz')}}" class="btn btn-info btn-circle btn-sm" title="Back to Topic List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {{Form::open(['route' => 'quizset.store','class'=>'quizset'])}}
            
            @include('partial.flash')
            @include("partial.error")

            <div class="form-group mt-1 row">
                <div class="col-sm-6 mb-3">
                <input type="text" id="name" class="form-control" placeholder="Quizset Name">
                </div>
                <div class="col-sm-6 mb-3">
                    <input type="text" id="title" class="form-control" placeholder="Quizset Title">
                    </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-3 mb-3">
                {!! Form::select('category_id',$categories,null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'category_id', 'placeholder'=>'Category']) !!}
                
            </div>
            <div class="col-sm-3">
                {!! Form::select('subcategory_id',$subcategories,null, ['required', 'class'=>'form-control form-control-profile', 'id'=>'subcategory_id', 'placeholder'=>'Subcategory']) !!}
                
            </div>
            <div class="col-sm-3">
                {!! Form::select('type', ['m'=>'MCQ', 'd'=>'Descriptive'],'m', ['required', 'class'=>'form-control form-control-profile', 'id'=>'type','rows'=>'1', 'placeholder'=>'Type']) !!}
            </div>
            <div class="col-sm-3">
                <div class=" mb-3 mb-sm-0">
                    {!! Form::hidden('user_id',Auth::user()->id, null, ['required', 'disabled','class'=>'form-control', 'id'=>'user_id', 'placeholder'=>'User']) !!}
                </div>
                            <div class="form-group">
                                {!! Form::button('Show', ['class'=>'btn btn-info btn-profile btn-block','id'=>'showbtn']) !!}
                            </div>
                            {!! Form::close() !!}
            </div>
            </div>

    </div>
    </div>
    <hr>
    <div class="row">
        <div class="col-9">
            <h1>All Quiz</h1>
            <div id="quizcontainer">

            </div>
        </div>
        <div class="col-3"> Selected Quizes</div>
    </div>
    
@endsection

@section('scripts')
    <script>
        $(document).ready(function () {
            // alert(55)
            $("#showbtn").click(function(){
                // alert(5)
                $.ajax({
                    type: "get",
                    url: "{{ url('showquiz') }}",
                    data: {
                        cid: $("#category_id").val(),
                        scid: $("#subcategory_id").val(),
                        page: "1",
                    },
                    dataType: "json",
                    success: function (response) {
                        alert(555)
                        console.log(response);
                    }
                });
            });
        });
    </script>
@endsection


{{-- @foreach ($categories as $category)
@foreach
($category->subcategories->$scategory)
{{$scategory->name??''}}
@endforeach
@endforeach --}}