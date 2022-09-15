<div id="app">
    <div id="sidebar" class='active'>
        <div class="sidebar-wrapper active">
            <a href="{{ url('./') }}">
                <div class="sidebar-header text-center border-bottom">
                    <img src="{{ url('assets/img/logo/tiger_logo.png') }}" alt="logo">
                    <span class="logo-title text-warning">Tiger</span>&nbsp;<span class="logo-title text-info">Quiz</span>
                </div>
            </a>
            <div class="sidebar-menu">
                @if (Auth::check() && Auth::user()->role == '3')
                    <ul class="menu">
                        <li class='sidebar-title'>Main Menu</li>
                        <li class="sidebar-item active ">
                            <a href="{{ url('/student') }}" class='sidebar-link'>
                                <i data-feather="home" width="20"></i>
                                <span>Student Dashboard</span>
                            </a>
                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="settings" width="20"></i>
                                <span>Quizzes </span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="{{ url('/quiz/qz/qshow') }}">Random Quizzes </a>
                                </li>

                                <li>
                                    <a href="{{ url('/playquiz') }}">Chose Quizzes</a>
                                </li>



                            </ul>

                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="book" width="20"></i>
                                <span>Leaderboard</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="{{ url('/leaderboard/index') }}">Your Rank</a>
                                </li>

                                <li>
                                    <a href="{{ url('/leaderboard/index') }}">Add Quizset</a>
                                </li>



                            </ul>

                        </li>
                        <li class="sidebar-item  has-sub">
                            <a href="#" class='sidebar-link'>
                                <i data-feather="book" width="20"></i>
                                <span>Quiz Results</span>
                            </a>

                            <ul class="submenu ">

                                <li>
                                    <a href="{{ url('') }}">Last Quiz Result</a>
                                </li>

                                <li>
                                    <a href="{{ url('/') }}">All Quiz Result</a>
                                </li>



                            </ul>

                        </li>
                        <hr>
                    </ul>
                @else
                    <span class="">
                        <div class=".cardld one pb-3">
                            <div class="header">

                                <h3 class="title text-center text-info mt-3">Leaderboard</h3>
                                <div></div>
                            </div>
                            <div class=" mt-3 d-flex justify-content-between">
                                <div class="day text-info ms-4">Today</div>
                                <div class="day active text-info" >Week</div>
                                <div class="day text-info me-4">Month</div>
                            </div>
                            <div class="profile">
                                <div class="person second ms-3">
                                    <div class="text-info">2</div>
                                    <i class="fas fa-caret-up"></i>
                                    <img src="https://image.flaticon.com/icons/png/512/949/949666.png" alt=""
                                        class="photo">
                                    <p class="text-info">@imran</p>
                                    <p class="text-info">8023</p>
                                </div>
                                <div class="person first">
                                    <div class="text-info">1</div>
                                    <i class="fas fa-crown"></i>
                                    <img src="https://image.flaticon.com/icons/png/512/4086/4086600.png" alt=""
                                        class="photo main">
                                    <p class="text-warning">@minar</p>
                                    <p class="text-warning">8122</p>
                                </div>
                                <div class="person third me-3">
                                    <div class="text-info">3</div>
                                    <i class="fas fa-caret-up"></i>
                                    <img src="https://image.flaticon.com/icons/png/512/4333/4333609.png" alt=""
                                        class="photo">
                                    <p class="text-info">@lurepot</p>
                                    <p class="text-info">7884</p>
                                </div>
                            </div>
                        </div>
                    </span>
                @endif
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
    <style>
       
        .cardld {
            min-height: auto;
            width: auto;
        }

        .photo {
            width: 40px;
            background: #fff;
            border-radius: 50%;
            border: 2px solid cyan;
            margin: 1rem 0;
        }

        .profile {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .profile .person {
            display: flex;
            margin: 1rem 0;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }

        .profile .person.first {
            z-index: 10;
            transform: translateY(-10%);
        }

        .first .fa-crown {
            color: gold;
            filter: drop-shadow(0px 0px 5px gold);
        }
        .fa-caret-up {
            color: cyan;
            font-size: 21px;
        }

    </style>
