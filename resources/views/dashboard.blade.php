<html lang="en" data-footer="true" data-override='{"attributes": {"placement": "vertical", "layout": "boxed" }, "storagePrefix": "ecommerce-platform"}'>
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <title>Tiger Quiz | Admin Dashboard</title>
    <meta name="description" content="Ecommerce Dashboard" />
    <!-- Favicon Tags Start -->
    <link rel="apple-touch-icon-precomposed" sizes="57x57" href="img/favicon/apple-touch-icon-57x57.png" />
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="img/favicon/apple-touch-icon-114x114.png" />
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/favicon/apple-touch-icon-72x72.png" />
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="img/favicon/apple-touch-icon-144x144.png" />
    <link rel="apple-touch-icon-precomposed" sizes="60x60" href="img/favicon/apple-touch-icon-60x60.png" />
    <link rel="apple-touch-icon-precomposed" sizes="120x120" href="img/favicon/apple-touch-icon-120x120.png" />
    <link rel="apple-touch-icon-precomposed" sizes="76x76" href="img/favicon/apple-touch-icon-76x76.png" />
    <link rel="apple-touch-icon-precomposed" sizes="152x152" href="img/favicon/apple-touch-icon-152x152.png" />
    <link rel="icon" type="image/png" href="img/favicon/favicon-196x196.png" sizes="196x196" />
    <link rel="icon" type="image/png" href="img/favicon/favicon-96x96.png" sizes="96x96" />
    <link rel="icon" type="image/png" href="img/favicon/favicon-32x32.png" sizes="32x32" />
    <link rel="icon" type="image/png" href="img/favicon/favicon-16x16.png" sizes="16x16" />
    <link rel="icon" type="image/png" href="img/favicon/favicon-128.png" sizes="128x128" />
    <meta name="application-name" content="&nbsp;" />
    <meta name="msapplication-TileColor" content="#FFFFFF" />
    <meta name="msapplication-TileImage" content="img/favicon/mstile-144x144.png" />
    <meta name="msapplication-square70x70logo" content="img/favicon/mstile-70x70.png" />
    <meta name="msapplication-square150x150logo" content="img/favicon/mstile-150x150.png" />
    <meta name="msapplication-wide310x150logo" content="img/favicon/mstile-310x150.png" />
    <meta name="msapplication-square310x310logo" content="img/favicon/mstile-310x310.png" />
    <!-- Favicon Tags End -->
    <!-- Font Tags Start -->
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="font/CS-Interface/style.css" />
    <!-- Font Tags End -->
    <!-- Vendor Styles Start -->
    <link rel="stylesheet" href="css/vendor/bootstrap.min.css" />
    <link rel="stylesheet" href="css/vendor/OverlayScrollbars.min.css" />

    <!-- Vendor Styles End -->
    <!-- Template Base Styles Start -->
    <link rel="stylesheet" href="css/styles.css" />
    <!-- Template Base Styles End -->

    <link rel="stylesheet" href="css/main.css" />
    <script src="js/base/loader.js"></script>
  </head>

  <body>
    <div id="root">
      <div id="nav" class="nav-container d-flex">
        <div class="nav-content d-flex">
          <!-- Logo Start -->
          <div class="logo position-relative">
            <a href="{{ url('/dashboard') }}">
              <!-- Logo can be added directly -->
          {{-- <img src="img/logo/tiger_logo.png" alt="logo"/> --}}

              <!-- Or added via css to provide different ones for different color themes -->
              <div class="img"></div>
            </a>
            <hr>
          </div>
     
          <!-- Logo End -->

          <!-- User Menu Start -->
          <div class="user-container d-flex">
            <a href="#" class="d-flex user position-relative" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <img class="profile" alt="profile" src="img/profile/{{ Auth::user()->name }}.png" />
              <div class="name">{{ Auth::user()->name }}</div>
            </a>
            <div class="dropdown-menu dropdown-menu-end user-menu wide">
              <div class="row mb-3 ms-0 me-0">
                <div class="col-12 ps-1 mb-2">
                  <div class="text-extra-small text-primary">ACCOUNT</div>
                </div>
                <div class="col-6 ps-1 pe-1">
                  <ul class="list-unstyled">
                    <li>
                      <a href="#">User Info</a>
                    </li>
                    <li>
                      <a href="#">Preferences</a>
                    </li>
                    <li>
                      <a href="#">Calendar</a>
                    </li>
                  </ul>
                </div>
                <div class="col-6 pe-1 ps-1">
                  <ul class="list-unstyled">
                    <li>
                      <a href="#">Security</a>
                    </li>
                    <li>
                      <a href="#">Billing</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="row mb-1 ms-0 me-0">
                <div class="col-12 p-1 mb-2 pt-2">
                  <div class="text-extra-small text-primary">APPLICATION</div>
                </div>
                <div class="col-6 ps-1 pe-1">
                  <ul class="list-unstyled">
                    <li>
                      <a href="#">Themes</a>
                    </li>
                    <li>
                      <a href="#">Language</a>
                    </li>
                  </ul>
                </div>
                <div class="col-6 pe-1 ps-1">
                  <ul class="list-unstyled">
                    <li>
                      <a href="#">Devices</a>
                    </li>
                    <li>
                      <a href="#">Storage</a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="row mb-1 ms-0 me-0">
                <div class="col-12 p-1 mb-3 pt-3">
                  <div class="separator-light"></div>
                </div>
                <div class="col-6 ps-1 pe-1">
                  <ul class="list-unstyled">
                    <li>
                      <a href="#">
                        <i data-cs-icon="help" class="me-2" data-cs-size="17"></i>
                        <span class="align-middle">Help</span>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i data-cs-icon="document-full" class="me-2" data-cs-size="17"></i>
                        <span class="align-middle">Docs</span>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-6 pe-1 ps-1">
                  <ul class="list-unstyled">
                    <li>
                      <a href="#">
                        <i data-cs-icon="gear" class="me-2" data-cs-size="17"></i>
                        <span class="align-middle">Settings</span>
                      </a>
                    </li>
                    <li>
                      <span class="align-middle">
                        <form method="POST" action="{{ route('logout') }}"> @csrf <a href="{{route('logout')}}" onclick="event.preventDefault(); this.closest('form').submit();"> <i data-cs-icon="logout" class="me-2" data-cs-size="17"></i> {{ __('Log Out') }}
                              </a>
                      </form>
                      </span>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- User Menu End -->

          <!-- Icons Menu Start -->
          <ul class="list-unstyled list-inline text-center menu-icons">
            <li class="list-inline-item">
              <a href="#" data-bs-toggle="modal" data-bs-target="#searchPagesModal">
                <i data-cs-icon="search" data-cs-size="18"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" id="pinButton" class="pin-button">
                <i data-cs-icon="lock-on" class="unpin" data-cs-size="18"></i>
                <i data-cs-icon="lock-off" class="pin" data-cs-size="18"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" id="colorButton">
                <i data-cs-icon="light-on" class="light" data-cs-size="18"></i>
                <i data-cs-icon="light-off" class="dark" data-cs-size="18"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#" data-bs-toggle="dropdown" data-bs-target="#notifications" aria-haspopup="true" aria-expanded="false" class="notification-button">
                <div class="position-relative d-inline-flex">
                  <i data-cs-icon="bell" data-cs-size="18"></i>
                  <span class="position-absolute notification-dot rounded-xl"></span>
                </div>
              </a>
              <div class="dropdown-menu dropdown-menu-end wide notification-dropdown scroll-out" id="notifications">
                <div class="scroll">
                  <ul class="list-unstyled border-last-none">
                    <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                      <img src="img/profile/profile-1.jpg" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                      <div class="align-self-center">
                        <a href="#">Joisse Kaycee just sent a new comment!</a>
                      </div>
                    </li>
                    <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                      <img src="img/profile/profile-2.jpg" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                      <div class="align-self-center">
                        <a href="#">New order received! It is total $147,20.</a>
                      </div>
                    </li>
                    <li class="mb-3 pb-3 border-bottom border-separator-light d-flex">
                      <img src="img/profile/profile-3.jpg" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                      <div class="align-self-center">
                        <a href="#">3 items just added to wish list by a user!</a>
                      </div>
                    </li>
                    <li class="pb-3 pb-3 border-bottom border-separator-light d-flex">
                      <img src="img/profile/profile-6.jpg" class="me-3 sw-4 sh-4 rounded-xl align-self-center" alt="..." />
                      <div class="align-self-center">
                        <a href="#">Kirby Peters just sent a new message!</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
            </li>
          </ul>
          <!-- Icons Menu End -->

          <!-- Menu Start -->
          <div class="menu-container flex-grow-1">
            <ul id="menu" class="menu">
              <li>
                <a href="Dashboard.html">
                  <i data-cs-icon="shop" class="icon" data-cs-size="18"></i>
                  <span class="label">Dashboard</span>
                </a>
              </li>
              <li>
                <a href="#products" data-href="Products.html">
                  <i data-cs-icon="cupcake" class="icon" data-cs-size="18"></i>
                  <span class="label">Quiz</span>
                </a>
                <ul id="products">
                  <li>
                    <a href="Products.List.html">
                      <span class="label">MCQ</span>
                    </a>
                  </li>
                  <li>
                    <a href="Products.Detail.html">
                      <span class="label">Descriptive</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#orders" data-href="Orders.html">
                  <i data-cs-icon="cart" class="icon" data-cs-size="18"></i>
                  <span class="label">Orders</span>
                </a>
                <ul id="orders">
                  <li>
                    <a href="Orders.List.html">
                      <span class="label">List</span>
                    </a>
                  </li>
                  <li>
                    <a href="Orders.Detail.html">
                      <span class="label">Detail</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#customers" data-href="Customers.html">
                  <i data-cs-icon="user" class="icon" data-cs-size="18"></i>
                  <span class="label">Customers</span>
                </a>
                <ul id="customers">
                  <li>
                    <a href="Customers.List.html">
                      <span class="label">List</span>
                    </a>
                  </li>
                  <li>
                    <a href="Customers.Detail.html">
                      <span class="label">Detail</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="#storefront" data-href="Storefront.html">
                  <i data-cs-icon="screen" class="icon" data-cs-size="18"></i>
                  <span class="label">Storefront</span>
                </a>
                <ul id="storefront">
                  <li>
                    <a href="Storefront.Home.html">
                      <span class="label">Home</span>
                    </a>
                  </li>
                  <li>
                    <a href="Storefront.Filters.html">
                      <span class="label">Filters</span>
                    </a>
                  </li>
                  <li>
                    <a href="Storefront.Categories.html">
                      <span class="label">Categories</span>
                    </a>
                  </li>
                  <li>
                    <a href="Storefront.Detail.html">
                      <span class="label">Detail</span>
                    </a>
                  </li>
                  <li>
                    <a href="Storefront.Cart.html">
                      <span class="label">Cart</span>
                    </a>
                  </li>
                  <li>
                    <a href="Storefront.Checkout.html">
                      <span class="label">Checkout</span>
                    </a>
                  </li>
                  <li>
                    <a href="Storefront.Invoice.html">
                      <span class="label">Invoice</span>
                    </a>
                  </li>
                </ul>
              </li>
              <li>
                <a href="Shipping.html">
                  <i data-cs-icon="shipping" class="icon" data-cs-size="18"></i>
                  <span class="label">Shipping</span>
                </a>
              </li>
              <li>
                <a href="Discount.html">
                  <i data-cs-icon="tag" class="icon" data-cs-size="18"></i>
                  <span class="label">Discount</span>
                </a>
              </li>
              <li>
                <a href="Settings.html">
                  <i data-cs-icon="gear" class="icon" data-cs-size="18"></i>
                  <span class="label">Settings</span>
                </a>
              </li>
              <li>
                
                  <span class="align-middle">
                    <form method="POST" action="{{ route('logout') }}">
                      @csrf <a href="{{route('logout')}}" 
                      onclick="event.preventDefault(); this.closest('form').submit();">
                      <i data-cs-icon="logout" class="me-2" data-cs-size="17"></i>{{ __('Log Out') }}</a>
                  </form>
                  </span>
               
            </ul>
          </div>
          <!-- Menu End -->

          <!-- Mobile Buttons Start -->
          <div class="mobile-buttons-container">
            <!-- Menu Button Start -->
            <a href="#" id="mobileMenuButton" class="menu-button">
              <i data-cs-icon="menu"></i>
            </a>
            <!-- Menu Button End -->
          </div>
          <!-- Mobile Buttons End -->
        </div>
        <div class="nav-shadow"></div>
      </div>

      <nav class="navbar navbar-expand-lg navbar-dark bg-dark ms-5">
        <div class="container ms-5">
            <a class="navbar-brand" href="#!"> {{ __('Tiger Quiz') }}</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Search</a></li>
                    <li class="nav-item"><a class="nav-link" href="#!">Contact</a></li>
                    <li class="nav-item"><a class="nav-link" aria-current="page" href="#">Blog</a></li>
                    <li class="nav-item me-5 ms-5">
                      <a class="nav-link active name" href="#">{{ Auth::user()->name }}</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
        <div class="container ms-5">
          <!-- Title and Top Buttons Start -->
          <div class="page-title-container">
            <div class="row">
              <!-- Title Start -->
              <div class="col-12 col-md-7">
                <a class="muted-link pb-2 d-inline-block hidden" href="#">
                  <span class="align-middle lh-1 text-small">&nbsp;</span>
                </a>
                <h1 class="mb-0 pb-0 display-4" id="title">Welcome, {{ Auth::user()->name }}!</h1>
              </div>
              <!-- Title End -->
            </div>
          </div>
          <!-- Title and Top Buttons End -->

          <!-- Stats Start -->
          <div class="row">
            <div class="col-12">
              <div class="d-flex">
                <div class="dropdown-as-select me-3" data-setActive="false" data-childSelector="span">
                  <a class="pe-0 pt-0 align-top lh-1 dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                    <span class="small-title"></span>
                  </a>
                  <div class="dropdown-menu font-standard">
                    <div class="nav flex-column" role="tablist">
                      <a class="active dropdown-item text-medium" href="#" aria-selected="true" role="tab">Today's</a>
                      <a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Weekly</a>
                      <a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Monthly</a>
                      <a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Yearly</a>
                    </div>
                  </div>
                </div>
                <h2 class="small-title">Stats</h2>
              </div>
              <div class="mb-5">
                <div class="row g-2">
                  <div class="col-6 col-md-4 col-lg-2">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column align-items-center">
                        <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                          <i data-cs-icon="dollar" class="text-primary"></i>
                        </div>
                        <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">EARNINGS</div>
                        <div class="text-primary cta-4">$ 315.20</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-2">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column align-items-center">
                        <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                          <i data-cs-icon="basket" class="text-primary"></i>
                        </div>
                        <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">ORDERS</div>
                        <div class="text-primary cta-4">16</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-2">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column align-items-center">
                        <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                          <i data-cs-icon="server" class="text-primary"></i>
                        </div>
                        <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">SESSIONS</div>
                        <div class="text-primary cta-4">463</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-2">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column align-items-center">
                        <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                          <i data-cs-icon="user" class="text-primary"></i>
                        </div>
                        <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">USERS</div>
                        <div class="text-primary cta-4">17</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-2">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column align-items-center">
                        <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                          <i data-cs-icon="arrow-top-left" class="text-primary"></i>
                        </div>
                        <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">RETURNS</div>
                        <div class="text-primary cta-4">2</div>
                      </div>
                    </div>
                  </div>
                  <div class="col-6 col-md-4 col-lg-2">
                    <div class="card h-100 hover-scale-up cursor-pointer">
                      <div class="card-body d-flex flex-column align-items-center">
                        <div class="sw-6 sh-6 rounded-xl d-flex justify-content-center align-items-center border border-primary mb-4">
                          <i data-cs-icon="message" class="text-primary"></i>
                        </div>
                        <div class="mb-1 d-flex align-items-center text-alternate text-small lh-1-25">COMMENTS</div>
                        <div class="text-primary cta-4">5</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Stats End -->

          <div class="row">
            <!-- Recent Orders Start -->
            <div class="col-xl-6 mb-5">
              <h2 class="small-title">Recent Orders</h2>
              <div class="mb-n2 scroll-out">
                <div class="scroll-by-count" data-count="6">
                  <div class="card mb-2 sh-15 sh-md-6">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                          <a href="Orders.Detail.html" class="body-link stretched-link">Order #54129</a>
                        </div>
                        <div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                          <span class="badge bg-outline-primary me-1">PENDING</span>
                        </div>
                        <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            17.35
                          </span>
                        </div>
                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Today - 13:20</div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2 sh-15 sh-md-6">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                          <a href="Orders.Detail.html" class="body-link stretched-link">Order #54128</a>
                        </div>
                        <div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                          <span class="badge bg-outline-primary me-1">PENDING</span>
                        </div>
                        <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            145.20
                          </span>
                        </div>
                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Today - 11:32</div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2 sh-15 sh-md-6">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                          <a href="Orders.Detail.html" class="body-link stretched-link">Order #54127</a>
                        </div>
                        <div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                          <span class="badge bg-outline-primary me-1">PENDING</span>
                        </div>
                        <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            110.85
                          </span>
                        </div>
                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Today - 11:20</div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2 sh-15 sh-md-6">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                          <a href="Orders.Detail.html" class="body-link stretched-link">Order #54126</a>
                        </div>
                        <div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                          <span class="badge bg-outline-primary me-1">PENDING</span>
                        </div>
                        <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            58.00
                          </span>
                        </div>
                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Today - 10:20</div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2 sh-15 sh-md-6">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                          <a href="Orders.Detail.html" class="body-link stretched-link">Order #54125</a>
                        </div>
                        <div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                          <span class="badge bg-outline-secondary me-1">SHIPPED</span>
                        </div>
                        <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            22.05
                          </span>
                        </div>
                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Today - 07:30</div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-2 sh-15 sh-md-6">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                          <a href="Orders.Detail.html" class="body-link stretched-link">Order #54124</a>
                        </div>
                        <div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                          <span class="badge bg-outline-secondary me-1">SHIPPED</span>
                        </div>
                        <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            14.25
                          </span>
                        </div>
                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Monday - 17:30</div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-2 sh-15 sh-md-6">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                          <a href="Orders.Detail.html" class="body-link stretched-link">Order #54123</a>
                        </div>
                        <div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                          <span class="badge bg-outline-quaternary me-1">DELIVERED</span>
                        </div>
                        <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            42.00
                          </span>
                        </div>
                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Monday - 11:25</div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-2 sh-15 sh-md-6">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                          <a href="Orders.Detail.html" class="body-link stretched-link">Order #54122</a>
                        </div>
                        <div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                          <span class="badge bg-outline-quaternary me-1">DELIVERED</span>
                        </div>
                        <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            63.25
                          </span>
                        </div>
                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Monday - 15:20</div>
                      </div>
                    </div>
                  </div>

                  <div class="card mb-2 sh-15 sh-md-6">
                    <div class="card-body pt-0 pb-0 h-100">
                      <div class="row g-0 h-100 align-content-center">
                        <div class="col-10 col-md-4 d-flex align-items-center mb-3 mb-md-0 h-md-100">
                          <a href="Orders.Detail.html" class="body-link stretched-link">Order #54121</a>
                        </div>
                        <div class="col-2 col-md-3 d-flex align-items-center text-muted mb-1 mb-md-0 justify-content-end justify-content-md-start">
                          <span class="badge bg-outline-quaternary me-1">DELIVERED</span>
                        </div>
                        <div class="col-12 col-md-2 d-flex align-items-center mb-1 mb-md-0 text-alternate">
                          <span>
                            <span class="text-small">$</span>
                            74.00
                          </span>
                        </div>
                        <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end mb-1 mb-md-0 text-alternate">Monday - 13:10</div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Recent Orders End -->

            <!-- Performance Start -->
            <div class="col-xl-6 mb-5">
              <div class="d-flex">
                <div class="dropdown-as-select me-3" data-setActive="false" data-childSelector="span">
                  <a class="pe-0 pt-0 align-top lh-1 dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false" aria-haspopup="true">
                    <span class="small-title"></span>
                  </a>
                  <div class="dropdown-menu font-standard">
                    <div class="nav flex-column" role="tablist">
                      <a class="active dropdown-item text-medium" href="#" aria-selected="true" role="tab">Today's</a>
                      <a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Weekly</a>
                      <a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Monthly</a>
                      <a class="dropdown-item text-medium" href="#" aria-selected="false" role="tab">Yearly</a>
                    </div>
                  </div>
                </div>
                <h2 class="small-title">Performance</h2>
              </div>
              <div class="card sh-45 h-xl-100-card">
                <div class="card-body h-100">
                  <div class="h-100">
                    <canvas id="horizontalTooltipChart"></canvas>
                    <div
                      class="custom-tooltip position-absolute bg-foreground rounded-md border border-separator pe-none p-3 d-flex z-index-1 align-items-center opacity-0 basic-transform-transition"
                    >
                      <div
                        class="icon-container border d-flex align-middle align-items-center justify-content-center align-self-center rounded-xl sh-5 sw-5 rounded-xl me-3"
                      >
                        <span class="icon"></span>
                      </div>
                      <div>
                        <span class="text d-flex align-middle text-alternate align-items-center text-small">Bread</span>
                        <span class="value d-flex align-middle text-body align-items-center cta-4">300</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Performance End -->
          </div>

          <div class="row">
            <div class="col-12 col-xxl">
              <div class="row">
                <!-- Activity Start -->
                <div class="col-xxl-6 mb-5">
                  <h2 class="small-title">Activity</h2>
                  <div class="card sh-35">
                    <div class="card-body scroll-out h-100">
                      <div class="scroll h-100">
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-cs-icon="circle" class="text-primary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">New user registiration</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">18 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-cs-icon="circle" class="text-primary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">3 new product added</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">18 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-cs-icon="square" class="text-secondary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">
                                  Product out of stock:
                                  <a href="#" class="alternate-link underline-link">Breadstick</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">16 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-cs-icon="square" class="text-secondary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">Category page returned an error</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-cs-icon="circle" class="text-primary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">14 products added</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-cs-icon="hexagon" class="text-tertiary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">
                                  New sale:
                                  <a href="#" class="alternate-link underline-link">Steirer Brot</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-cs-icon="hexagon" class="text-tertiary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">
                                  New sale:
                                  <a href="#" class="alternate-link underline-link">Soda Bread</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">15 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-cs-icon="triangle" class="text-warning align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">Recived a support ticket</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">14 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-cs-icon="hexagon" class="text-tertiary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">
                                  New sale:
                                  <a href="#" class="alternate-link underline-link">Cholermüs</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-cs-icon="hexagon" class="text-tertiary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">
                                  New sale:
                                  <a href="#" class="alternate-link underline-link">Bazlama</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-cs-icon="triangle" class="text-warning align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">Recived a comment</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-cs-icon="triangle" class="text-warning align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">Recived an email</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">13 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-cs-icon="hexagon" class="text-tertiary align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">
                                  New sale:
                                  <a href="#" class="alternate-link underline-link">Bazlama</a>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">12 Dec</div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 mb-2">
                          <div class="col-auto">
                            <div class="sw-3 d-inline-block d-flex justify-content-start align-items-center h-100">
                              <div class="sh-3">
                                <i data-cs-icon="triangle" class="text-warning align-top"></i>
                              </div>
                            </div>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-4 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="text-alternate mt-n1 lh-1-25">Recived a comment</div>
                              </div>
                            </div>
                          </div>
                          <div class="col-auto">
                            <div class="d-inline-block d-flex justify-content-end align-items-center h-100">
                              <div class="text-muted ms-2 mt-n1 lh-1-25">12 Dec</div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Activity End -->

                <!-- Recent Reviews Start -->
                <div class="col-xxl-6 mb-5">
                  <h2 class="small-title">Recent Reviews</h2>
                  <div class="card sh-35">
                    <div class="card-body mb-n2 scroll-out h-100">
                      <div class="scroll h-100">
                        <div class="row g-0 sh-10 mb-3">
                          <div class="col-auto">
                            <a href="Products.Detail.html">
                              <img src="img/product/small/cornbread.jpg" class="card-img rounded-md h-100 sw-8" alt="thumb" />
                            </a>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="mb-1">
                                  <a href="Products.Detail.html" class="body-link">Soda Bread</a>
                                  <span class="text-muted">by</span>
                                  <a href="Customers.Detail.html" class="body-link">Kathleen Bertha</a>
                                </div>
                                <div class="text-small text-muted text-truncate mb-1">
                                  Chocolate bar marzipan marzipan carrot cake gingerbread pastry ice cream. Ice cream danish sugar plum biscuit pudding powder
                                  soufflé donut macaroon.
                                </div>
                                <div class="br-wrapper br-theme-cs-icon">
                                  <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 sh-10 mb-3">
                          <div class="col-auto">
                            <a href="Products.Detail.html">
                              <img src="img/product/small/panettone.jpg" class="card-img rounded-md h-100 sw-8" alt="thumb" />
                            </a>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="mb-1">
                                  <a href="Products.Detail.html" class="body-link">Barmbrack</a>
                                  <span class="text-muted">by</span>
                                  <a href="Customers.Detail.html" class="body-link">Kathleen Bertha</a>
                                </div>
                                <div class="text-small text-muted text-truncate mb-1">Bear claw sweet liquorice jujubes. Muffin gingerbread bear claw.</div>
                                <div class="br-wrapper br-theme-cs-icon">
                                  <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 sh-10 mb-3">
                          <div class="col-auto">
                            <a href="Products.Detail.html">
                              <img src="img/product/small/buccellato-di-lucca.jpg" class="card-img rounded-md h-100 sw-8" alt="thumb" />
                            </a>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="mb-1">
                                  <a href="Products.Detail.html" class="body-link">Fougasse</a>
                                  <span class="text-muted">by</span>
                                  <a href="Customers.Detail.html" class="body-link">Olli Hawkins</a>
                                </div>
                                <div class="text-small text-muted text-truncate mb-1">Bear claw sweet liquorice jujubes. Muffin gingerbread bear claw.</div>
                                <div class="br-wrapper br-theme-cs-icon">
                                  <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="row g-0 sh-10">
                          <div class="col-auto">
                            <a href="Products.Detail.html">
                              <img src="img/product/small/pullman-loaf.jpg" class="card-img rounded-md h-100 sw-8" alt="thumb" />
                            </a>
                          </div>
                          <div class="col">
                            <div class="card-body d-flex flex-column pt-0 pb-0 ps-3 pe-0 h-100 justify-content-center">
                              <div class="d-flex flex-column">
                                <div class="mb-1">
                                  <a href="Products.Detail.html" class="body-link">Steirer Brot</a>
                                  <span class="text-muted">by</span>
                                  <a href="Customers.Detail.html" class="body-link">Zayn Hammond</a>
                                </div>
                                <div class="text-small text-muted text-truncate mb-1">Chupa chups candy canes.</div>
                                <div class="br-wrapper br-theme-cs-icon">
                                  <select class="rating" name="rating" autocomplete="off" data-readonly="true" data-initial-rating="5">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- Recent Reviews End -->
              </div>
            </div>

            <!-- Tips Start -->
            <div class="col-12 col-xxl-auto mb-5">
              <h2 class="small-title">Tips</h2>
              <div class="card h-100-card sw-xxl-40">
                <div class="card-body row g-0">
                  <div class="col-12 d-flex flex-column justify-content-between align-items-start">
                    <div>
                      <div class="cta-3">More sales?</div>
                      <div class="mb-3 cta-3 text-primary">Add new products!</div>
                      <div class="text-muted mb-4">
                        Cheesecake chocolate carrot cake pie lollipop apple pie lemon cream lollipop.
                        <br />
                        Oat cake lemon drops gummi pie cake cotton.
                      </div>
                    </div>
                    <a href="Products.List.html" class="btn btn-icon btn-icon-start btn-outline-primary stretched-link">
                      <i data-cs-icon="plus"></i>
                      <span>Add Products</span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <!-- Tips End -->
          </div>

          <div class="row gx-4 gy-5">
            <!-- Top Selling Items Start -->
            <div class="col-xl-6">
              <h2 class="small-title">Top Selling Items</h2>
              <div class="scroll-out mb-n2">
                <div class="scroll-by-count" data-count="4">
                  <div class="card mb-2">
                    <div class="row g-0 sh-14 sh-md-10">
                      <div class="col-auto">
                        <a href="Products.Detail.html">
                          <img src="img/product/small/panettone.jpg" alt="user" class="card-img card-img-horizontal sw-11" />
                        </a>
                      </div>
                      <div class="col">
                        <div class="card-body pt-0 pb-0 h-100">
                          <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-6 d-flex align-items-center mb-2 mb-md-0">
                              <a href="Products.Detail.html">Cholermüs</a>
                            </div>
                            <div class="col-12 col-md-3 d-flex align-items-center text-muted text-medium">Multigrain</div>
                            <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">4.024 Sales</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="row g-0 sh-14 sh-md-10">
                      <div class="col-auto">
                        <a href="Products.Detail.html">
                          <img src="img/product/small/cornbread.jpg" alt="user" class="card-img card-img-horizontal sw-11" />
                        </a>
                      </div>
                      <div class="col">
                        <div class="card-body pt-0 pb-0 h-100">
                          <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-6 d-flex align-items-center mb-2 mb-md-0">
                              <a href="Products.Detail.html">Ruisreikäleipä</a>
                            </div>
                            <div class="col-12 col-md-3 d-flex align-items-center text-muted text-medium">Sourdough</div>
                            <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">2.701 Sales</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="row g-0 sh-14 sh-md-10">
                      <div class="col-auto">
                        <a href="Products.Detail.html">
                          <img src="img/product/small/boule.jpg" alt="user" class="card-img card-img-horizontal sw-11" />
                        </a>
                      </div>
                      <div class="col">
                        <div class="card-body pt-0 pb-0 h-100">
                          <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-6 d-flex align-items-center mb-2 mb-md-0">
                              <a href="Products.Detail.html">Barmbrack</a>
                            </div>
                            <div class="col-12 col-md-3 d-flex align-items-center text-muted text-medium">Whole Wheat</div>
                            <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">1.972 Sales</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="row g-0 sh-14 sh-md-10">
                      <div class="col-auto">
                        <a href="Products.Detail.html">
                          <img src="img/product/small/zopf.jpg" alt="user" class="card-img card-img-horizontal sw-11" />
                        </a>
                      </div>
                      <div class="col">
                        <div class="card-body pt-0 pb-0 h-100">
                          <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-6 d-flex align-items-center mb-2 mb-md-0">
                              <a href="Products.Detail.html">Cheesymite Scroll</a>
                            </div>
                            <div class="col-12 col-md-3 d-flex align-items-center text-muted text-medium">Whole Wheat</div>
                            <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">1.543 Sales</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card mb-2">
                    <div class="row g-0 sh-14 sh-md-10">
                      <div class="col-auto">
                        <a href="Products.Detail.html">
                          <img src="img/product/small/sandwich-bread.jpg" alt="user" class="card-img card-img-horizontal sw-11" />
                        </a>
                      </div>
                      <div class="col">
                        <div class="card-body pt-0 pb-0 h-100">
                          <div class="row g-0 h-100 align-content-center">
                            <div class="col-12 col-md-6 d-flex align-items-center mb-2 mb-md-0">
                              <a href="Products.Detail.html">Buccellato di Lucca</a>
                            </div>
                            <div class="col-12 col-md-3 d-flex align-items-center text-muted text-medium">Whole Wheat</div>
                            <div class="col-12 col-md-3 d-flex align-items-center justify-content-md-end text-muted text-medium">1.352 Sales</div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Top Selling Items End -->

            <!-- Top Search Terms Start -->
            <div class="col-xl-6">
              <h2 class="small-title">Top Search Terms</h2>
              <div class="card sh-35 h-xl-100-card">
                <div class="card-body scroll-out h-100">
                  <div class="scroll h-100">
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>Whole wheat bread</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">847</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>White bread</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">753</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>Sourdough bread</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">721</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>Melonpan bread</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">693</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>Gluten free bread</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">431</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>sliced whole wheat bread</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">381</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>Packaged Zopf bread</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">310</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>Barm cake</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">301</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>Pita bread</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">288</span>
                      </div>
                    </div>
                    <div class="d-flex flex-row align-items-center justify-content-between mb-2">
                      <div class="d-flex flex-column">
                        <div>Taftan cake</div>
                      </div>
                      <div class="d-flex">
                        <span class="badge bg-outline-secondary">219</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Top Search Terms End -->
          </div>
        </div>
      </main>
      <!-- Layout Footer Start -->
      <footer>
        <div class="footer-content">
          <div class="container">
            <div class="row">
              <div class="col-12 col-sm-6">
                <p class="mb-0 text-muted text-medium">Colored Strategies 2021</p>
              </div>
              <div class="col-sm-6 d-none d-sm-block">
                <ul class="breadcrumb pt-0 pe-0 mb-0 float-end">
                  <li class="breadcrumb-item mb-0 text-medium"><a href="#" class="btn-link">Review</a></li>
                  <li class="breadcrumb-item mb-0 text-medium"><a href="#" class="btn-link">Purchase</a></li>
                  <li class="breadcrumb-item mb-0 text-medium"><a href="#" class="btn-link">Docs</a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </footer>
      <!-- Layout Footer End -->
    </div>

    <!-- Theme Settings Modal Start -->
    <div
      class="modal fade modal-right scroll-out-negative"
      id="settings"
      data-bs-backdrop="true"
      tabindex="-1"
      role="dialog"
      aria-labelledby="settings"
      aria-hidden="true"
    >
      <div class="modal-dialog modal-dialog-scrollable full" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title">Theme Settings</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div class="scroll-track-visible">
              <div class="mb-5" id="color">
                <label class="mb-3 d-inline-block form-label">Color</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="light-blue" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="blue-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT BLUE</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-blue" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="blue-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK BLUE</span>
                    </div>
                  </a>
                </div>

                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="light-red" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="red-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT RED</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-red" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="red-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK RED</span>
                    </div>
                  </a>
                </div>

                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="light-green" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="green-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT GREEN</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-green" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="green-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK GREEN</span>
                    </div>
                  </a>
                </div>

                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="light-purple" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="purple-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT PURPLE</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-purple" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="purple-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK PURPLE</span>
                    </div>
                  </a>
                </div>

                <div class="row d-flex g-3 justify-content-between flex-wrap mb-3">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="light-pink" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="pink-light"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT PINK</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="dark-pink" data-parent="color">
                    <div class="card rounded-md p-3 mb-1 no-shadow color">
                      <div class="pink-dark"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK PINK</span>
                    </div>
                  </a>
                </div>
              </div>

              <div class="mb-5" id="navcolor">
                <label class="mb-3 d-inline-block form-label">Override Nav Palette</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap">
                  <a href="#" class="flex-grow-1 w-33 option col" data-value="default" data-parent="navcolor">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DEFAULT</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-33 option col" data-value="light" data-parent="navcolor">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-secondary figure-light top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">LIGHT</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-33 option col" data-value="dark" data-parent="navcolor">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-muted figure-dark top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">DARK</span>
                    </div>
                  </a>
                </div>
              </div>

              <div class="mb-5" id="behaviour">
                <label class="mb-3 d-inline-block form-label">Menu Behaviour</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="pinned" data-parent="behaviour">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary left large"></div>
                      <div class="figure figure-secondary right small"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">PINNED</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="unpinned" data-parent="behaviour">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary left"></div>
                      <div class="figure figure-secondary right"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">UNPINNED</span>
                    </div>
                  </a>
                </div>
              </div>

              <div class="mb-5" id="layout">
                <label class="mb-3 d-inline-block form-label">Layout</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap">
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="fluid" data-parent="layout">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">FLUID</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-50 option col" data-value="boxed" data-parent="layout">
                    <div class="card rounded-md p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom small"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">BOXED</span>
                    </div>
                  </a>
                </div>
              </div>

              <div class="mb-5" id="radius">
                <label class="mb-3 d-inline-block form-label">Radius</label>
                <div class="row d-flex g-3 justify-content-between flex-wrap">
                  <a href="#" class="flex-grow-1 w-33 option col" data-value="rounded" data-parent="radius">
                    <div class="card rounded-md radius-rounded p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">ROUNDED</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-33 option col" data-value="standard" data-parent="radius">
                    <div class="card rounded-md radius-regular p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">STANDARD</span>
                    </div>
                  </a>
                  <a href="#" class="flex-grow-1 w-33 option col" data-value="flat" data-parent="radius">
                    <div class="card rounded-md radius-flat p-3 mb-1 no-shadow">
                      <div class="figure figure-primary top"></div>
                      <div class="figure figure-secondary bottom"></div>
                    </div>
                    <div class="text-muted text-part">
                      <span class="text-extra-small align-middle">FLAT</span>
                    </div>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <button type="button" class="btn settings-button btn-gradient-primary" data-bs-toggle="modal" data-bs-target="#settings" id="settingsButton">
      <i data-cs-icon="paint-roller" class="position-relative"></i>
    </button>
    <!-- Theme Settings Modal End -->

    <!-- Search Modal Start -->
    <div class="modal fade modal-under-nav modal-search modal-close-out" id="searchPagesModal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header border-0 p-0">
            <button type="button" class="btn-close btn btn-icon btn-icon-only btn-foreground" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body ps-5 pe-5 pb-0 border-0">
            <input id="searchPagesInput" class="form-control form-control-xl borderless ps-0 pe-0 mb-1 auto-complete" type="text" autocomplete="off" />
          </div>
          <div class="modal-footer border-top justify-content-start ps-5 pe-5 pb-3 pt-3 border-0">
            <span class="text-alternate d-inline-block m-0 me-3">
              <i data-cs-icon="arrow-bottom" data-cs-size="15" class="text-alternate align-middle me-1"></i>
              <span class="align-middle text-medium">Navigate</span>
            </span>
            <span class="text-alternate d-inline-block m-0 me-3">
              <i data-cs-icon="arrow-bottom-left" data-cs-size="15" class="text-alternate align-middle me-1"></i>
              <span class="align-middle text-medium">Select</span>
            </span>
          </div>
        </div>
      </div>
    </div>
    <!-- Search Modal End -->

    <!-- Vendor Scripts Start -->
    <script src="js/vendor/jquery-3.5.1.min.js"></script>
    <script src="js/vendor/bootstrap.bundle.min.js"></script>
    <script src="js/vendor/OverlayScrollbars.min.js"></script>
    <script src="js/vendor/autoComplete.min.js"></script>
    <script src="js/vendor/clamp.min.js"></script>
    <script src="js/vendor/Chart.bundle.min.js"></script>
    <script src="js/vendor/chartjs-plugin-rounded-bar.min.js"></script>
    <script src="js/vendor/jquery.barrating.min.js"></script>
    <!-- Vendor Scripts End -->

    <!-- Template Base Scripts Start -->
    <script src="font/CS-Line/csicons.min.js"></script>
    <script src="js/base/helpers.js"></script>
    <script src="js/base/globals.js"></script>
    <script src="js/base/nav.js"></script>
    <script src="js/base/search.js"></script>
    <script src="js/base/settings.js"></script>
    <script src="js/base/init.js"></script>
    <!-- Template Base Scripts End -->
    <!-- Page Specific Scripts Start -->
    <script src="js/cs/charts.extend.js"></script>
    <script src="js/pages/dashboard.js"></script>
    <script src="js/common.js"></script>
    <script src="js/scripts.js"></script>
    <!-- Page Specific Scripts End -->
  </body>
</html>


