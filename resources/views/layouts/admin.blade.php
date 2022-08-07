<!DOCTYPE html>
<html lang="en">
    <head>
    <meta charset="utf-8"/>
    <title> @yield('title')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta content="Tiger quiz" name="keywords" />
    <meta content="tiger quiz" name="description" />
    <!-- Favicon -->
    <link href="assets/img/favicon/favicon.ico" rel="icon" />
   <!-- Bootstrap CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <script src="https://use.fontawesome.com/releases/v6.1.2/js/all.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
    <!-- page css-->
    <!-- <link rel="stylesheet" href="assets/css/bootstrap.css"> -->
    <link rel="stylesheet" href="assets/css/chart.min.css">
    <link rel="stylesheet" href="assets/scrollbar/perfect-scrollbar.css">
    <link rel="stylesheet" href="assets/css/tea_style.css">
    
    @yield('head')
        
    </head>
    <body>
    
    <!--for sidebar-->
         @yield('sidebar')

    <!--for navbar-->
    <div id="main">
         @yield('navbar')

  <!--main body-->
    @yield('body')
    <!--main content-->
    <div class="main-content container-fluid">
     <section class="section">
         @yield('content')
     </section>
    </div>
   <!-- end of main div -->
   <!-- footer div -->
        @yield('footer')
     
    </div></div>
   <!-- end div -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js" crossorigin="anonymous"></script>
        <script src="assets/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
       <!-- ==================== -->
        <script src="assets/js/feather.min.js"></script>
        <script src="assets/scrollbar/perfect-scrollbar.min.js"></script>
        <script src="assets/js/tea_app.js"></script>
        <script src="assets/js/chart.min.js"></script>
        <script src="assets/js/dashboard.js"></script>
        <script src="assets/js/tea_main.js"></script>
        @yield('scripts')
        
   </body>
   </html>