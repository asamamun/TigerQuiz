
    <nav class=" navbar navbar-header navbar-expand navbar-light border-bottom border-info d-flex justify-content-between">
        <a class="sidebar-toggler" href="#"><span class="navbar-toggler-icon"></span></a>
        <button class="btn navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav d-flex align-items-center navbar-light ml-auto">
                <li class="dropdown nav-icon">
                    <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                        <div class="d-lg-inline-block">
                            <i data-feather="bell"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-large">
                        <h6 class='py-2 px-4'>Notifications</h6>
                        <ul class="list-group rounded-none">
                            <li class="list-group-item border-0 align-items-start">
                                <div class="avatar bg-success mr-3">
                                    <span class="avatar-content"><i class="fa-regular fa-gear"></i></span>
                                </div>
                                <div>
                                    <h6 class='text-bold'>New Order</h6>
                                    <p class='text-xs'>
                                        An order made by Ahmad Saugi for product Samsung Galaxy S69
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </li>
                <li class="dropdown nav-icon mr-2">
                    <a href="#" data-toggle="dropdown" class="nav-link  dropdown-toggle nav-link-lg nav-link-user">
                        <div class="d-lg-inline-block">
                            <i data-feather="mail"></i>
                        </div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a class="dropdown-item" href="#"><i data-feather="mail"></i> Mail</a>
                        <a class="dropdown-item" href="#"><i class="fa-regular fa-gear"></i></i> Settings</a>
                       
                    </div>
                </li>
                @auth
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <div class="avatar mr-1">
                            <!--if  profile or default avatar is not exists in db -->
                            @if (!(Auth::user()?->profile) || (Auth::user()?->profile->image == '' ))
                            <picture><img src="{{url('assets/img/profile/default2.png')}}" alt="{{auth()->user()?->name}}" class="profile"/></picture> 
                            @else
                                <picture><img src="{{url(Storage::url('public/profiles/'.Auth::user()->profile->image))}}" alt="{{auth()->user()?->name}}" class="profile"/></picture>
                            @endif
                            <!--end if -->
                            
                        </div>
                        <div class="d-none d-md-block d-lg-inline-block">Hi, <span class="sidebar-user__title">{{ Auth::user()?->name}}</span></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <span><a class="dropdown-item" href="{{url('profile')}}"><i class="fa-solid fa-user"></i> Profile</a></span>
                     <span><a class="dropdown-item" href="#"><i class="fa-solid fa-gear"></i> Settings</a></span>
                        <span class="dropdown-divider"></span>
                        <span><a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                                <i class="fa-solid fa-arrow-right-from-bracket"></i> {{ __('Logout') }}</a></span>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </div>
                </li>
                @endauth
                @guest
                <li class="dropdown">
                    <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <div class="avatar mr-1">
                            <!--if  profile or default avatar is not exists in db -->
                            
                            <picture><img src="{{url('assets/img/profile/default2.png')}}" alt="" class="profile"/></picture> 
                           
                            
                        </div>
                        <div class="d-none d-md-block d-lg-inline-block">Hi, <span class="sidebar-user__title">Guest</span></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-right">
                        <span><a class="dropdown-item" href="{{route('login')}}"><i class="fa-solid fa-user"></i> Login</a></span>
                        <span><a class="dropdown-item" href="{{route('register')}}"><i class="fa-solid fa-user"></i> Register</a></span>
                     
                    </div>
                </li>
                @endguest
            </ul>
        </div>
        <hr>
    </nav>
 