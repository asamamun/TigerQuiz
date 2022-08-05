<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <title>Tiger Quiz</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Tiger quiz" name="keywords" />
    <meta content="tiger quiz" name="description" />
    <!-- Favicon -->
    
    <link href="assets/img/favicon/favicon.ico" rel="icon" />
    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Handlee&family=Nunito&display=swap"/>
  
   <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
  
    @yield('css')
    <!--for code-->
    @section('css')
     <!--for include-->
    @show
</head>


<body>
    
    <!--for container-fluid-->
    <div class="container-fluid">
        @yield('fluid')
    </div>
    <!--for container-->
    <div class="container">
        @yield('container')
    </div>
    <!--for container free-->
    <div class="">
        @yield('content')
    </div>
    @section('include')
    <!--for code-->
    @show

    <!--for footer-fluid-->
    <div class="container-fluid">
    @yield('footer')
    @section('footer')
    
    @show
    </div>
  
   @yield('scripts')
   @section('scripts')
    
   @show
</body>
</html>