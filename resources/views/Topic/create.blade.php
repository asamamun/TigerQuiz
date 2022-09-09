@extends('layouts.admin')

@section('title', 'Add Chapter')
@section('sidebar')
    @include('dashboard.sidebar')
@endsection

@section('navbar')
    @include('inc.admin.navbar')
@endsection

@section('content')
    <div class="card card-hover shadow mb-4">
        <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold text-info">Add Topic</h6>
            <a href="{{ url('topic') }}" class="btn btn-info btn-circle btn-sm" title="Back to Topic List">
                <i class="fas fa-arrow-left"></i>
            </a>
        </div>
        <div class="card-body">
            {{ Form::open(['route' => 'topic.store', 'class' => 'user', 'enctype' => 'multipart/form-data']) }}

            @include('partial.flash')
            @include('partial.error')


            <div class="form-group row">
                <div class="col-sm-4 mb-3 mb-sm-0">
                    {!! Form::select('category_id', $categories, null, [
                        'placeholder' => 'Select Class',
                        'id' => 'category_id',
                        'class' => 'form-control',
                    ]) !!}
                </div>
                <div class="col-sm-4">
                    {!! Form::select('subcategory_id', $subcategories, null, [
                        'placeholder' => 'Select Subject',
                        'id' => 'subcategory_id',
                        'class' => 'form-control',
                    ]) !!}
                </div>

                <div class="col-sm-4">
                    {!! Form::select('active', [0 => 'No', 1 => 'Yes'], 1, [
                        'required',
                        'class' => 'form-control form-control-profile',
                        'id' => 'active',
                        'max' => '1',
                        'min' => '0',
                        'value' => '[0,1]',
                        'placeholder' => 'Active',
                    ]) !!}
                    {{-- {!! Form::select('active', null, ['placeholder' => 'Select Category', 'class'=>'form-control']) !!} --}}
                </div>
            </div>
            <div class="form-group row">
                <div class="col-sm-6 mb-3 mb-sm-0">
                    {!! Form::text('name', null, [
                        'required',
                        'class' => 'form-control form-control-profile',
                        'id' => 'name',
                        'placeholder' => 'Name',
                    ]) !!}
                </div>
                <div class="col-sm-6">
                    {!! Form::textarea('description', null, [
                        'required',
                        'class' => 'form-control form-control-profile',
                        'id' => 'description',
                        'rows' => '1',
                        'placeholder' => 'Description',
                    ]) !!}
                </div>
            </div>
            <div class="form-group">
                {!! Form::submit('Add Class', ['class' => 'btn btn-info btn-profile btn-block']) !!}
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection




@section('scripts')
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).ready(function() {


        });
    </script>
@endsection
