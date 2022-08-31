@extends('layouts.tiger')
@section('title', 'Tiger Quiz')

@section('css')

@stop

{{-- main content add here --}}
@section('content')

    <!-- Facilities Start -->
    <div class="container-fluid pt-5">
        <div class="container pb-3">
            <div class="row">
                <div class="col-lg-12 col-md-6 pb-1">
                    <div class=" card-hover  d-flex bg-light shadow-sm border-top border rounded mb-2 justify-content-between" style="padding: 30px">
                        
                        <div class="col-4 pl-4">
                            
                            <h3><i class="flaticon-050-fence font-weight-normal text-primary"></i> <a href="{{ url('playquiz/subcat/' . $cats->id) }}">{{ $cats->name}}</a></h3>            
                          
                       
                            
                        </div>
                            <div class="col-8 text-center">

                                {{ Form::model(['route' => 'playquiz.cat', 'class' => 'form', 'enctype' => 'multipart/form-data']) }}


                                <div class="form-group mt-1 row">
                                    <div class="col-sm-3 mb-3">
                                      
                
                                                </div>
                                              <div class="col-sm-3 mb-3 mb-sm-0"> 
                                        

                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        

                                    </div>
                                    <div class="col-sm-3 mb-3 mb-sm-0">
                                        {!! Form::select('type', ['m' => 'MCQ', 'd' => 'Descriptive', 'qi' => 'Imagery'], 'm', [
                                            'required',
                                            'class' => 'form-control form-control-profile',
                                            'id' => 'type',
                                            'rows' => '1',
                                        ]) !!}
                                    </div>
                                </div>
                            </div>
                       
                    </div>
                </div>

            </div>
            <div class="row">
                
             
                    @foreach ($cats->subcategories as $scs)
                    <div class="col-lg-4 col-md-6 pb-1">
                        <div class=" card-hover  d-flex bg-light shadow-sm border-top border rounded mb-2"
                            style="padding: 30px">
                            
                            <div class="pl-4">
                                    <li class="m-0">
                                        <i class="flaticon-050-fence me-1 text-primary"></i><a href="{{ url('playquiz/subcat/' . $scs->id) }}">{{ $scs->name}}</a>
                                    </li>
                               
                            </div>
                        </div>
                    </div>
                    @endforeach
                
            </div>
        </div>

        <!-- Facilities End -->
    @endsection

    {{-- footer add here --}}
    @section('footerin')
        @include('inc.footer')
    @stop
