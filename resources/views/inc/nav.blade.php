
<style>
  .dropdown:hover .dropdown-menu{
      display: block;
  }
  .dropdown-menu{
      margin-top: 0;
  }
</style>
<!-- Navbar Start -->
<div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
      <div class="d-flex col-3">
        <a href="{{url('./')}}" class="navbar-brand font-weight-bold text-secondary"style="font-size: 50px">
          <span class="icon logo"><img src="{{url('assets/img/logo/tiger_logo.png')}}" class="" width="20%" alt="logo"></span>
            
            <span class="text-primary">Tiger Quiz</span></a>
    </div>
    <button
        type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <i class="fa-solid fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav font-weight-bold mx-auto py-0">
          <a href="./" class="nav-item nav-link active">Home</a>
          <a href="./about" class="nav-item nav-link">About</a>
          <a href="./class" class="nav-item nav-link">Classes</a>
          <a href="./teachers" class="nav-item nav-link">Teachers</a>
          <a href="./leaderboard" class="nav-item nav-link">Leaderboard</a>
          <!-- <a href="gallery.html" class="nav-item nav-link">Gallery</a> -->
          <div class="nav-item dropdown">
            <a href="#"
              class="nav-link dropdown-toggle" data-toggle="dropdown">Quizzes</a>
            <div class="dropdown-menu rounded-0 m-0">
              <a href="blog.html" class="dropdown-item">MCQ</a>
              <a href="single.html" class="dropdown-item">Descriptive</a>
            </div>
          </div>
          <a href="./contact" class="nav-item nav-link">Blog</a>
        </div>
        &nbsp; &nbsp;
        <li class="nav-item"> 
          @if (Route::has('login'))
          <div class="hidden auth-nav fixed top-0 right-0 sm:block">
              @auth
              @php
              $r = Auth::user()->role;    
              @endphp
              @if($r == "1")
              <li class="nav-item ms-5 auth-nav"><a href="{{ url('/dashboard') }}" class="text-sm text-gray dark:text-gray">Dashboard</a></li>
              @endif
              @if($r == "2")
              <li class="nav-item ms-5 auth-nav"><a href="{{ url('/teacher') }}" class="text-sm text-gray dark:text-gray">Dashboard</a></li>
              @endif
              @if($r == "3")
              <li class="nav-item ms-5 auth-nav"><a href="{{ url('/student') }}" class="text-sm text-gray dark:text-gray">Dashboard</a></li>
              @endif
              @else
             <li class="nav-item ms-4 auth-nav "> <a class="nav-link btn btn-sm btn-success" href="{{ route('login') }}">Login</a></li>
              {{-- &nbsp; --}}
              @if (Route::has('register'))
             <li class="nav-item"> <a class="nav-link btn btn-sm btn-info ms-1" href="{{ route('register') }}" >Register</a></li>
              @endif
              @endauth
          </div>
          @endif
      </li>
      </div>
    </nav>
  </div>
  <!-- Navbar End -->
  