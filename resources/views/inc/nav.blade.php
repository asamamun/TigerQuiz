<!-- Navbar Start -->
<div class="container-fluid bg-light position-relative shadow">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0 px-lg-5">
      <div class="d-flex col-3">
        <a href="./" class="navbar-brand font-weight-bold text-secondary"style="font-size: 50px">
          <span class="icon logo"><img src="assets/img/logo/tiger_logo.png" class="" width="20%" alt="logo"></span>
            <!-- <i class="flaticon-043-teddy-bear"></i> -->
            <span class="text-primary">Tiger Quiz</span></a>
    </div>
    <button
        type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <i class="fa-solid fa-bars"></i>
      </button>

      <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        <div class="navbar-nav font-weight-bold mx-auto py-0">
          <a href="./" class="nav-item nav-link active">Home</a>
          <a href="about.html" class="nav-item nav-link">About</a>
          <a href="class.html" class="nav-item nav-link">Classes</a>
          <a href="team.html" class="nav-item nav-link">Teachers</a>
          <a href="team.html" class="nav-item nav-link">Students</a>
          <!-- <a href="gallery.html" class="nav-item nav-link">Gallery</a> -->
          <div class="nav-item dropdown">
            <a href="#"
              class="nav-link dropdown-toggle" data-toggle="dropdown">Quizzes</a>
            <div class="dropdown-menu rounded-0 m-0">
              <a href="blog.html" class="dropdown-item">MCQ</a>
              <a href="single.html" class="dropdown-item">Descriptive</a>
            </div>
          </div>
          <a href="contact.html" class="nav-item nav-link">Contact</a>
        </div>
        &nbsp; &nbsp;
        <li class="nav-item"> 
          @if (Route::has('login'))
          <div class="hidden auth-nav fixed top-0 right-0 sm:block">
              @auth
              <li class="nav-item ms-5 auth-nav"><a href="{{ url('/dashboard') }}" class="text-sm text-gray dark:text-gray">Dashboard</a></li>
              @else
             <li class="nav-item ms-4 auth-nav me-1"> <a class="nav-link btn btn-success me-1" href="{{ route('login') }}">Login</a></li>
              &nbsp;
              @if (Route::has('register'))
             <li class="nav-item ms-1"> <a class="nav-link btn btn-info ms-1" href="{{ route('register') }}" >Register</a></li>
              @endif
              @endauth
          </div>
          @endif
      </li>
      </div>
    </nav>
  </div>
  <!-- Navbar End -->