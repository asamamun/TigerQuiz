<div id="app">
    <div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
     <a href="./"><div class="sidebar-header text-center border-bottom">
    <img src="{{url('assets/img/logo/tiger_logo.png')}}" alt="logo">
    <span class="logo-title text-warning">Tiger</span>&nbsp;<span class="logo-title text-info">Quiz</span>
</div></a>
<div class="sidebar-menu">
    <ul class="menu">
            <li class='sidebar-title'>Main Menu</li>
            <li class="sidebar-item active ">
                <a href="{{url('dashboard')}}" class='sidebar-link'>
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
                        <a href="component-alert.html">Site Info</a>
                    </li>
                    
                    <li>
                        <a href="component-badge.html">Site Theame</a>
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
                        <a href="{{url('category')}}">All Class</a>
                    </li>
                    
                    <li>
                        <a href="{{url('category/create')}}">Add Class</a>
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
                        <a href="{{url('subcategory')}}">All Subject</a>
                    </li>
                    
                    <li>
                        <a href="{{url('subcategory/create')}}">Add Subject</a>
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
                        <a href="{{url('topic')}}">All Chapter</a>
                    </li>
                    <li>
                        <a href="{{url('topic/create')}}">Add Chapter</a>
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
                        <a href="{{url('quiz/create')}}">Add quiz </a>
                    </li>
                    
                    <li>
                        <a href="{{url('quiz')}}">All quiz</a>
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
                        <a href="{{url('quizset/create')}}">Add Quizset </a>
                    </li>
                    
                    <li>
                        <a href="{{url('quizset')}}">All Quizset</a>
                    </li>
                    
                   
                    
                </ul>
                
            </li>
            <li class='sidebar-title'>Teacher & Students</li>
        
        
        
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i data-feather="users" width="20"></i> 
                    <span>Users</span>
                </a>
                
                <ul class="submenu ">
                    
                    <li>
                        <a href="{{url('dashboard/allusers')}}">All Users</a>
                    </li>
                    
                    <li>
                        <a href="{{url('dashboard/allusers')}}">Promot Users</a>
                    </li>
                    
                    <li>
                        <a href="{{url('dashboard.allusers')}}">Deactive Users</a>
                    </li>
                    
                </ul>
                
            </li>
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i data-feather="users" width="20"></i> 
                    <span>Teachers</span>
                </a>
                
                <ul class="submenu ">
                    
                    <li>
                        <a href="{{url('dashboard/teachers')}}">All Teachers</a>
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
                    <span>All Students</span>
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
                        <a href="auth-login.html">Students</a>
                    </li>
                    
                    <li>
                        <a href="auth-register.html">Teachers</a>
                    </li>
                </ul>
                
            </li>

        
        
        
            <li class="sidebar-item  has-sub">
                <a href="#" class='sidebar-link'>
                    <i data-feather="user-minus" width="20"></i> 
                    <span>Change Role</span>
                </a>
                
                <ul class="submenu ">
                    
                    <li>
                        <a href="error-403.html">403</a>
                    </li>
                    
                
                    
                </ul>
                
            </li>
    </ul>
</div>
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
</div>