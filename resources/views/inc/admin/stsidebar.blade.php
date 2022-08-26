<div id="app">
    <div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
     <a href="{{url('./')}}"><div class="sidebar-header text-center border-bottom">
    <img src="{{url('assets/img/logo/tiger_logo.png')}}" alt="logo">
    <span class="logo-title text-warning">Tiger</span>&nbsp;<span class="logo-title text-info">Quiz</span>
 </div></a>
 <div class="sidebar-menu">
    <ul class="menu">
            <li class='sidebar-title'>Main Menu</li>
            <li class="sidebar-item active ">
                <a href="index.html" class='sidebar-link'> 
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
                        <a href="{{url('quiz/qz/qshow')}}">Play Quizzes </a>
                    </li>
                    
                    <li>
                        <a href="{{url('quiz/qz/qshow')}}">Archive Quizset</a>
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
                        <a href="{{url('')}}">Your Rank</a>
                    </li>
                    
                    <li>
                        <a href="{{url('')}}">Add Quizset</a>
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
                        <a href="{{url('')}}">Last Quiz Result</a>
                    </li>
                    
                    <li>
                        <a href="{{url('assets/img/logo/tiger_logo.png')}}">All Quiz Result</a>
                    </li>
                    
                   
                    
                </ul>
                
            </li>
            <hr>
    </ul>
</div>
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
</div>