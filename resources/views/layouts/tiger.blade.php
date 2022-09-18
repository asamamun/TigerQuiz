<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
    <meta charset="utf-8"/>
    <title> @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Tiger quiz" name="keywords" />
    <meta content="tiger quiz" name="description" />
    <!-- Favicon -->
    <link href="{{url('assets/img/favicon/favicon.ico')}}" rel="icon" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap"/>
   <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v6.1.2/js/all.js" crossorigin="anonymous"></script>
    <!--for code-->
     @yield('css')
     @include('inc.maincss')
        
    </head>
    <body>
     {{-- navbar add here --}}
     @include('inc.nav')
  
    <div class="">
     @yield('content')
    </div>
     @section('include')
    
     @show
     {{-- end main content --}}

    {{-- add footer here --}}
    <div class="container-fluid">
        @yield('footer')

        @section('footerin')

        @show
        
     </div>
     {{-- end footer --}}

     <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
     <script src="{{url('assets/js/bootstrap.bundle.min.js')}}"></script>
     <script>
        $(document).ready(function() {
             // show the alert
             setTimeout(function() {
                $(".alert").alert('close');
            }, 500);
        });
    </script>
     <!-- ========================= -->
     @include('inc.mainjs')
        
     @yield('scripts')
       
</body>
</html>