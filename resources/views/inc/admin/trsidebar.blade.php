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
                <ul class="menu">
                    <li class='sidebar-title'>Main Menu</li>
                    <li class="sidebar-item active ">
                        <a href="index.html" class='sidebar-link'>
                            <i data-feather="home" width="20"></i>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="settings" width="20"></i>
                            <span>Settings </span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="component-alert.html">Profile Info</a>
                            </li>

                            <li>
                                <a href="component-alert.html">Quizzes</a>
                            </li>



                        </ul>

                    </li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="book-open" width="20"></i>
                            <span>Blogs</span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="{{ url('category') }}">All Blogs</a>
                            </li>
                            <li>
                                <a href="{{ url('category') }}">Write Blogs</a>
                            </li>
                        </ul>

                    </li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="book" width="20"></i>
                            <span>Categories</span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="{{ url('category') }}">All Class</a>
                            </li>
                        </ul>

                    </li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="book" width="20"></i>
                            <span>Subcategories</span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="{{ url('subcategory') }}">All Subject</a>
                            </li>
                        </ul>

                    </li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="book" width="20"></i>
                            <span>Topics</span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="{{ url('topic') }}">All Chapter</a>
                            </li>
                        </ul>

                    </li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="book" width="20"></i>
                            <span>Quizzes</span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="{{ url('quiz/create') }}">Add quiz </a>
                            </li>

                            <li>
                                <a href="{{ url('quiz') }}">All quiz</a>
                            </li>



                        </ul>

                    </li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="book-open" width="20"></i>
                            <span>Quizset </span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="{{ url('quizset/create') }}">Add quiz </a>
                            </li>

                            <li>
                                <a href="{{ url('quizset') }}">All quiz</a>
                            </li>



                        </ul>

                    </li>
                    <li class='sidebar-title'>Students</li>



                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="users" width="20"></i>
                            <span>All Students</span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="ui-chatbox.html">Chatbox</a>
                            </li>

                            <li>
                                <a href="ui-pricing.html">Pricing</a>
                            </li>

                            <li>
                                <a href="ui-todolist.html">To-do List</a>
                            </li>

                        </ul>

                    </li>
                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="users" width="20"></i>
                            <span>Invite Students</span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="ui-chart-chartjs.html">ChartJS</a>
                            </li>

                            <li>
                                <a href="ui-chart-apexchart.html">Apexchart</a>
                            </li>

                        </ul>

                    </li>
                    <li class='sidebar-title'>Others</li>



                    <li class="sidebar-item  has-sub">
                        <a href="#" class='sidebar-link'>
                            <i data-feather="award" width="20"></i>
                            <span>Leaderboard</span>
                        </a>

                        <ul class="submenu ">

                            <li>
                                <a href="{{ url('/leaderboard/index') }}">Student</a>
                            </li>

                            <li>
                                <a href="{{ url('/leaderboard/index') }}">Teacher</a>
                            </li>

                            <li>
                                <a href="auth-forgot-password.html">Forgot Password</a>
                            </li>

                        </ul>

                    </li>

                </ul>
            </div>
            <button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
        </div>
    </div>
