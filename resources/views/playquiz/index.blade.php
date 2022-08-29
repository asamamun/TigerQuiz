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
            @foreach ($cats as $cs)
                {{-- {{dd($cs);}} --}}
                
                    <div class="col-lg-4 col-md-6 pb-1">
                        <div class=" card-hover  d-flex bg-light shadow-sm border-top border rounded mb-4" style="padding: 30px">
                            <i class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"></i>
                            <div class="pl-4">
                                <h3>{{ $cs->name }}</h3>
                                @foreach ($cs->subcategories as $scs)
                                    <li class="m-0">
                                        {{ $scs->name}}
                                    </li>
                                @endforeach
                            </div>
                        </div>
                    </div>
              
            @endforeach
          </div>
        </div>
    </div>
    <!-- Facilities End -->
@endsection

{{-- footer add here --}}
@section('footerin')
    @include('inc.footer')
@stop
