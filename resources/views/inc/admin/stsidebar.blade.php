<div id="app">
    <div id="sidebar" class='active'>
    <div class="sidebar-wrapper active">
     <a href="{{url('./')}}"><div class="sidebar-header text-center border-bottom">
    <img src="{{url('assets/img/logo/tiger_logo.png')}}" alt="logo">
    <span class="logo-title text-warning">Tiger</span>&nbsp;<span class="logo-title text-info">Quiz</span>
 </div></a>
 <div class="sidebar-menu">
    @if (Auth::check() &&  Auth::user()->role == '3')
        
   
    <ul class="menu">
            <li class='sidebar-title'>Main Menu</li>
            <li class="sidebar-item active ">
                <a href="{{url('/student')}}" class='sidebar-link'> 
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
                        <a href="{{url('/quiz/qz/qshow')}}">Random Quizzes </a>
                    </li>
                    
                    <li>
                        <a href="{{url('/playquiz')}}">Chose Quizzes</a>
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
                        <a href="{{url('/leaderboard/index')}}">Your Rank</a>
                    </li>
                    
                    <li>
                        <a href="{{url('/leaderboard/index')}}">Add Quizset</a>
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
                        <a href="{{url('/')}}">All Quiz Result</a>
                    </li>
                    
                   
                    
                </ul>
                
            </li>
            <hr>
    </ul>
    @else
       <ul class="bg-info">
        
        <a href="{{route('register')}}">Resigter here</a>
       </ul>
       
    @endif
</div>
<button class="sidebar-toggler btn x"><i data-feather="x"></i></button>
</div>
</div>