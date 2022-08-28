@extends('layouts.tiger')
@section('title', 'Tiger Quiz')

@section('css')
   
@stop

{{-- main content add here --}}
@section('content')
<!-- Facilities Start -->
<div class="container-fluid pt-5">
    <div class="container pb-3">
      {{-- @foreach ($cats as $cs) --}}

      {{-- {{dd($cs);}} --}}
        <div class="row">
        <div class="col-lg-4 col-md-6 pb-1"><div
            class="d-flex bg-light shadow-sm border-top rounded mb-4" style="padding: 30px">
            <i class="flaticon-050-fence h1 font-weight-normal text-primary mb-3"></i>
            <div class="pl-4">
              {{-- <h4>{{ $qz->name }}</h4> --}}
              <p class="m-0">
                Kasd labore kasd et dolor est rebum dolor ut, clita dolor vero
                lorem amet elitr vero...
              </p>
            </div>
          </div>
        </div>
        {{-- @endforeach --}}

    </div>
  </div>
  <!-- Facilities End -->
@endsection

{{-- footer add here --}}
@section('footerin')
@include('inc.footer')
    @stop
