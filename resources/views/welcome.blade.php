

<!DOCTYPE html>
<html lang="en">
    <head>



        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="TigerQuiz is powerful online test generator that will automatically mark and grade your quizzes. Create, send and start analyzing the results now." />
        <meta name="keywords" content="Online test generator, online quiz maker, TigerQuiz, test generator, quiz maker, exam builder, online quiz software, timed quiz maker, multiple choice quiz maker, exam creator" />
        
        <meta name="author" content="">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        

        <title>Tiger Quiz</title>
        <base href="https://www.flexiquiz.com">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap.min.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/css/bootstrap-theme.min.css" />
                <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" />
                    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" rel="stylesheet">
        <link href="/Content/layout?v=h4VrYcj3yyewM7Lix5k27EnFTpHdULRomN5aQPQ62501" rel="stylesheet"/>


            <!-- Global site tag (gtag.js) - Google Analytics -->
            <script async src="https://www.googletagmanager.com/gtag/js?id=UA-61255730-2"></script>
            <script>
              window.dataLayer = window.dataLayer || [];
              function gtag(){dataLayer.push(arguments);}
              gtag('js', new Date());

              gtag('config', 'UA-61255730-2');
            </script>


<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
<meta name="description" content="" />
<meta name="author" content="" />
<!-- Favicon-->
<link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
<!-- Core theme CSS (includes Bootstrap)-->
<link href="assets/css/styles.css" rel="stylesheet" />


    </head>
    <body class="surveyPage ">

        <div id="mainCompanyGroup" style="display:none">QUIZ</div>

        <div class="surveyContentPage">

            <!-- Fixed navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">

                    <div class="browserWarning"></div>

                    <div id="mainMenu">
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <a class="navbar-brand" href="#!"> <span class="icon-bar text-info"> TIGER QUIZ</span></a>
                            {{-- <img class="navbar-brand FlexiQuizLogo" src="/Images/FlexiQuizLogoExtraSmall.jpg" alt="Logo" onclick="window.location=''" /> --}}
                            
                        </div>
                        <div class="navbar-collapse collapse">


                            <ul class="nav navbar-nav">
                                <li ><a href="/Home/Index">Home</a></li>
                                <li ><a href="/Home/Features">Features</a></li>
                                <li ><a href="/Home/Plans">Plans</a></li>
                                <li ><a href="/Help">Class</a></li>
                                <li ><a href="/Help">Quiz</a></li>
                            </ul>
                            <form class="navbar-form navbar-right mt-2" role="form">
                                @if (Route::has('login'))
                                    @auth
                                    <li class="nav-item auth-nav"><a href="{{ url('/dashboard') }}" class="text-sm text-gray dark:text-gray">Dashboard</a></li>
                                    @else
                                   <button class=''><a class="nav-link auth-nav" href="{{ route('login') }}">Log in</a></button>
                                    @if (Route::has('register'))
                                   <button class=''><a class="nav-link" href="{{ route('register') }}" >Register</a></button>
                                    @endif
                                    @endauth
                                @endif
                            </form>
                        </div><!--/.nav-collapse -->
                    </div>
                </div>
            </div>

            <noscript>
                <div class="container bs-callout" style="margin-top:80px;">
                    <strong>For full functionality of this site it is necessary to enable JavaScript.</strong>
                </div>
            </noscript>

            




<div id="homeBanner">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div id="bannerText">
                    <h1>Powerful online test and quiz maker</h1>
                    <p>Create, send and analyze your tests, quizzes and assessments for free with TigerQuiz</p>
                    <a class="btn btn-success btn-lg" onclick="joinWithoutSignup();">Get Started for Free &raquo;</a>
                </div>
            </div>
            <div class="col-md-5">
                <div id="bannerWrapper">
                    
                    <picture>
                        <source srcset="/Images/banner-laptop.png" media="(max-width:767px)" />
                        <img id="bannerLaptop" src="/Images/banner-laptop.png" srcset="/Images/banner-laptop2x.png 2x" alt="Creating a quiz on a laptop" />
                    </picture>

                    <picture>
                        <source srcset="/Images/banner-mobile.png" media="(max-width:767px)" />
                        <img id="bannerMobile" src="/Images/banner-mobile.png" srcset="/Images/banner-mobile2x.png 2x" alt="Taking a quiz on a mobile" />
                    </picture>

                    <svg id="bannerTick" viewBox="0 0 71 55">
                        <path fill="#2aabd2" opacity="0.25" d="M9 24 L1 34 L18 48 L32 48 L70 8 L60 0 L25 37 Z" />    
                    </svg>

                </div>
            </div>
        </div>
    </div>
</div>


<div class="container homePageMarketing">
    <!-- Example row of columns -->
    <div class="row">
        <div class="col-md-4">
            <img class="img-circle" style="width: 128px; height: 128px;" alt="Test Generator" src="/Images/compose.png">
            <h2>Create</h2>
            <p>Quickly create great looking tests using multiple question types and formatting options. </p>
        </div>
        <div class="col-md-4">
            <img class="img-circle" style="width: 128px; height: 128px;" alt="Publish" src="/Images/upload.png">
            <h2>Publish</h2>
            <p>Tests can either be published privately to a select group or open them up to everyone with a single link and registration page. </p>
        </div>
        <div class="col-md-4">
            <img class="img-circle" style="width: 128px; height: 128px;" alt="Analyze" src="/Images/trends.png">
            <h2>Analyze</h2>
            <p>FlexiQuiz instantly marks and grades your tests. Powerful reports then allow you to perform in-depth analysis across all responses. </p>
       </div>
    </div>
</div> <!-- /container -->

<div class="homePageFeatures">
    <div class="container">

        <div class="page-header">
            <h2>Why choose <strong>TigerQuiz</strong></h2>
        </div>

        <div class="row">
            
            <div class="col-xs-offset-1 col-xs-5 col-sm-3 col-sm-offset-0">
                <span class="featureIcon glyphicon glyphicon-font"></span>
                <h4>Auto-grading</h4>
            </div>
            <div class="col-xs-offset-1 col-xs-5 col-sm-3 col-sm-offset-0">
                <span class="featureIcon glyphicon glyphicon-stats"></span>
                <h4>Powerful reports</h4>
            </div>
            <div class="col-xs-offset-1 col-xs-5 col-sm-3 col-sm-offset-0">
                <span class="featureIcon glyphicon glyphicon-calendar"></span>
                <h4>Schedule your tests</h4>
            </div>
            <div class="col-xs-offset-1 col-xs-5 col-sm-3 col-sm-offset-0">
                <span class="featureIcon glyphicon glyphicon-eye-close"></span>
                <h4>Public and private tests</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-offset-1 col-xs-5 col-sm-3 col-sm-offset-0">
                <span class="featureIcon glyphicon glyphicon-envelope"></span>
                <h4>Custom email invites</h4>
            </div>
            <div class="col-xs-offset-1 col-xs-5 col-sm-3 col-sm-offset-0">
                <span class="featureIcon glyphicon glyphicon-picture"></span>
                <h4>Include images</h4>
            </div>
            <div class="col-xs-offset-1 col-xs-5 col-sm-3 col-sm-offset-0">
                <span class="featureIcon glyphicon glyphicon-usd"></span>
                <h4>Free plan option</h4>
            </div>
            <div class="col-xs-offset-1 col-xs-5 col-sm-3 col-sm-offset-0">
                <span class="featureIcon glyphicon glyphicon-phone"></span>
                <h4>Mobile ready</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-offset-1 col-xs-5 col-sm-3 col-sm-offset-0">
                <span class="featureIcon glyphicon glyphicon-th-list"></span>
                <h4>Multiple question types</h4>
            </div>
            <div class="col-xs-offset-1 col-xs-5 col-sm-3 col-sm-offset-0">
                <span class="featureIcon glyphicon glyphicon-lock"></span>
                <h4>Secured with SSL encryption</h4>
            </div>
            <div class="col-xs-offset-1 col-xs-5 col-sm-3 col-sm-offset-0">
                <span class="featureIcon glyphicon glyphicon-file"></span>
                <h4>PDF reports</h4>
            </div>
            <div class="col-xs-offset-1 col-xs-5 col-sm-3 col-sm-offset-0">
                <span class="featureIcon glyphicon glyphicon-cog"></span>
                <h4>Advanced configuration options</h4>
            </div>
        </div>

        <div class="row">
            <div class="col-xs-offset-1 col-xs-5 col-sm-3 col-sm-offset-0">
                <span class="featureIcon glyphicon glyphicon-time"></span>
                <h4>Timed tests</h4>
            </div>
            <div class="col-xs-offset-1 col-xs-5 col-sm-3 col-sm-offset-0">
                <span class="featureIcon glyphicon glyphicon-user"></span>
                <h4>Respondent accounts</h4>
            </div>
            <div class="col-xs-offset-1 col-xs-5 col-sm-3 col-sm-offset-0">
                <span class="featureIcon glyphicon glyphicon-globe"></span>
                <h4>Access anywhere</h4>
            </div>
            <div class="col-xs-offset-1 col-xs-5 col-sm-3 col-sm-offset-0">
                <span class="featureIcon glyphicon glyphicon-facetime-video"></span>
                <h4>Include video</h4>
            </div>
        </div>
    </div>
</div>

<div class="homePageTourFeatures">
    <div class="container">
        <div class="row text-center">
            <div class="col-sm-12">
                <h4><a href="/Home/Features">Take a tour of the FlexiQuiz features &raquo;</a></h4>
            </div>
        </div>
    </div>
</div>

<div class="homePageUses">
    <div class="container">
        <div class="row text-center page-header"><h2>Who uses <strong>TigerQuiz</strong></h2></div>
        <div class="row text-center">
            <div class="col-sm-4">
                <i class="fa fa-user fa-5x"></i>

                <h4>Individuals</h4>
                <p>
                    Create fun social quizzes that you can post on your website, blog or other social media site. 
                    If you prefer privacy the advanced email options allow you to quickly send private quizzes to your friends.
                    The review feature allows your friends to review their answers after they have completed the quiz.
                </p>
            </div>
            <div class="col-sm-4">
                <i class="fa fa-mortar-board fa-5x"></i>

                <h4>Teachers</h4>
                <p>
                    Quickly create courses or online tests for your students. 
                    You can make your test public or just publish it for your class or school with our private test options.
                    The premium account will allow you to upload media and have unlimited questions.
                    The auto-grading function will save you time and allow you to concentrate on what's important.
                    
                </p>
            </div>
            <div class="col-sm-4">
                <i class="fa fa-users fa-5x"></i>

                <h4>Businesses</h4>
                <p>
                    Create online training and assessments to ensure your staff are always up to date with the right skills.
                    The powerful reporting allows you to track your staff participation and progress.
                    TigerQuiz implements SSL encryption and offers public and private options so you can be sure your assessments are always secure.
                </p>
            </div>
        </div>
    </div>
</div>


    <div class="homePageKeyFunctions">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="text-center page-header">
                        <h2>Awesome <strong>Features</strong></h2>
                        <span class="center-line"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 col-sm-6">
                    <div class="homePageServices">
                        <div class="homePageServicesIcon">
                            <i class="fa fa-globe"></i>
                        </div>
                        <div class="homePageServicesInfo">
                            <h4>Access anywhere</h4>
                            <p>
                                Being online allows you and your respondents to access, administer and take your quizzes from anywhere at anytime.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="homePageServices">
                        <div class="homePageServicesIcon">
                            <i class="fa fa-lock"></i>
                        </div>
                        <div class="homePageServicesInfo">
                            <h4>Secured with SSL</h4>
                            <p>
                                With SSL encryption and utilising our advanced cloud infrastructure you can be sure your tests will always be secure.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="homePageServices">
                        <div class="homePageServicesIcon">
                            <i class="fa fa-check"></i>
                        </div>
                        <div class="homePageServicesInfo">
                            <h4>Auto-grading</h4>
                            <p>
                                TigerQuiz can automatically mark and grade your assessments, saving you the time to concentrate on whats important.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6">
                    <div class="homePageServices">
                        <div class="homePageServicesIcon">
                            <i class="fa fa-clock-o"></i>
                        </div>
                        <div class="homePageServicesInfo">
                            <h4>Timed tests</h4>
                            <p>
                                With TigerQuiz it is easy to set a time limit or allow your learners an unlimited amount of time to complete your assessment.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="homePageServices">
                        <div class="homePageServicesIcon">
                            <i class="fa fa-flash"></i>
                        </div><!--services icon-->
                        <div class="homePageServicesInfo">
                            <h4>Custom Branding</h4>
                            <p>
                                Customize your tests by adding your own branding with your school or companies logo.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6">
                    <div class="homePageServices">
                        <div class="homePageServicesIcon">
                            <i class="fa fa-eye"></i>
                        </div>
                        <div class="homePageServicesInfo">
                            <h4>Public and Private quizzes</h4>
                            <p>
                                Tests can either be published privately to a select group or open them up to everyone with a single link and registration page.
                            </p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="homePageBottomJoinNow">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <h4 class="animated slideInDown">
                        TigerQuiz IS A POWERFUL ONLINE TEST GENERATOR
                    </h4>

                    <p>
                        Build your own online tests and assessments with TigerQuiz for free.
                    </p>
                </div>
                <div class="col-sm-4">
                    <p><a class="btn btn-success btn-lg" role="button" onclick="window.location='https://www.flexiquiz.com/Account/Register?plan=free'">Get Started for Free &raquo;</a></p>
                </div>
            </div>
        </div>
    </div>


            


<div class="siteFooter">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-2">
                <h5><a href="/Home/TermsAndConditions">Terms and Conditions</a></h5>
            </div>
            <div class="col-md-2"><h5><a href="/Home/AntiSpamPolicy">Anti-Spam</a></h5></div>
            <div class="col-md-2">
                <h5><a href="/Home/PrivacyPolicy">Privacy</a></h5>
            </div>
                <div class="col-md-2"><h5><a href="/Help">Help</a></h5></div>
                <div class="col-md-2"><h5><a href="/blog">Blog</a></h5></div>

            <div class="col-md-2"><h5><a href="/Home/Contact">Contact Us</a></h5></div>
        </div>
        <div class="row text-center">

            <div class="col-md-offset-3 col-md-6">
                <h6>&copy; 2022 - nextSpark Pty Ltd.</h6>
            </div>
        </div>
    </div>
</div>


        </div>

    

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-migrate/3.3.1/jquery-migrate.min.js" integrity="sha512-wDH73bv6rW6O6ev5DGYexNboWMzBoY+1TEAx5Q/sdbqN2MB2cNTG9Ge/qv3c1QNvuiAuETsKJnnHH2UDJGmmAQ==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.min.js" integrity="sha256-4OrICDjBYfKefEbVT7wETRLNFkuq4TJV5WLGvjqpGAk=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js" integrity="sha256-g6iAfvZp+nDQ2TdTR/VVKJf3bGro4ub5fvWSWVRi2NE=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.4/js/bootstrap.min.js" integrity="sha256-JnqDCSpf1uxft0a84S1ECr038dZJwHL2U+F9DIAOtkc=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.10.0/jquery.validate.min.js" integrity="sha256-zeBXhIZxe7b3XDozN2EWt3Z3YZR1w4tZBCWOWxGOhDY=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validation-unobtrusive/3.2.2/jquery.validate.unobtrusive.min.js" integrity="sha256-Wmm/W/tEYyG8DI5G0qw+plrWVWbJNNr5dewPwJ44Qh8=" crossorigin="anonymous"></script>
        <script src="/bundles/layoutSC?v=z_Mz0d8Q05ErBm-ucl4mbRzolLZlAbSsFrYB2MEL7B81"></script>

        




        <script type="text/javascript">

            if (ie_ver() > 0 && ie_ver() <= 7) {
                $(".browserWarning").html("<br /><h5><strong>Your Browser Is Not Supported!</strong> Please use Firefox, Chrome, Safari or Internet Explorer 8+</h5><br />");

                $(".browserWarning").show();
                $("#mainMenu").hide();
            }
        </script>

            <script>
              window.addEventListener('load',function(){
                jQuery('button:contains(Sign up)').click(function(){
                  gtag('event','click',{'event_category':'link','event_label':jQuery(this).text()})
                })
                jQuery('[href="/Home/Contact"]').click(function(){
                  gtag('event','click',{'event_category':'link','event_label':jQuery(this).text()})
                })
                jQuery('button:contains(Login)').click(function(){
                  gtag('event','click',{'event_category':'link','event_label':jQuery(this).text()})
                })
              })
            </script>
    </body>

</html>
