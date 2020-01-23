@extends('layouts.app')

@section('content')
    <div class="content">
        <div class="title m-b-md">
          

            <head>
                    <!-- Required meta tags -->
                    <meta charset="utf-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
                
                    <!-- Bootstrap CSS -->
                    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
                    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
                    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
                    <link rel="stylesheet" href="css/animate.css">
                    <link rel="stylesheet" href="css/main.css">
                
                    <title>aboutus</title>
                    <style>
                    .jumbotron {width: 100%;height: 250px;}
                    .jumbotron h2 {padding-bottom: 0;}

                    /* hafl page */
  

.split {
  height: 50%;
  width: 50%;
  position: fixed;
  z-index: 1;
  top: 0;
  overflow-x: hidden;
  padding-top: 20px;
}

.left {
  left: 0;
}

.right {
  right: 0;
  
}

.centered {
  position: absolute;
  top: 50%;
  left: 50%;
  transform: translate(-50%, -50%);
  text-align: center;
}

.centered img {
  width: 150px;
  border-radius: 50%;
}
                    </style>
                </head>
                
                <body>
                    <header class="header bg">
                        <div class="container text-white">
                            <div class="row">
                                <div class="col-sm-4 align-self-center text-left">
                                        <h6>YCDI 2019</h6>
                                </div>
                                <div class="col-sm-4 col-12 align-self-center box-1 text-center">
                                    <a class="navbar-brand" href="index.html"><img src="images/header-logo.png" alt="logo"></a>
                                </div>
                                <div class="col-sm-4 align-self-center text-right">
                                    <div class="social-icons">
                                        <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        <img src="https://img.icons8.com/color/25/000000/tiktok.png">  
                                        <img src="https://img.icons8.com/color/30/000000/snapchat-circled-logo.png">  
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                        <!--container-->
                    </header>
                    <span class="position-absolute trigger"><!-- hidden trigger to apply 'stuck' styles --></span>
            
                    {{-- to see nav bar go to app in layouts file in views --}}
                    <!--Section-1-->
                    {{-- <section class="section-1">
                        <div class="jumbotron d-flex align-items-center">
                            <div class="gradient"></div>
                            <div class="container-fluid content">
                                <h1 data-aos="fade-right" data-aos-delay="300">Welcome to more.</h1>
                                <h2 data-aos="fade-left" data-aos-delay="300">the multipurpose psd wordrpess theme</h2>
                            </div>
                            <!--container-fluid end-->
                        </div>
                    </section> --}}
                    
                    <!-- About Section Start -->
            
                    <div id="about-us">
                        <div class="container">
                         {{-- <img src="images/about.jpg" alt="about-bg" class="thumbnail image" style="margin-top: 200px;margin-bottom: 330px"> --}}
                           <h3>About us</h3>
                            <div class="row" style="margin-right: 0; margin-left: 0;" data-aos="fade-up" data-aos-delay="300">
                                <div>
                                        <h1>Bounn Channs</h1>
                                        <div class="split left">
                                                <div class="centered">
                                                    <h5>The reason behind a project</h5>
                                                        <p> "The project idea started from Orange Programming Academy, as there is a final project for every student to do
                                                             in order to graduate from the academy.There are some requirements for graduation, if there are some characteristics 
                                                             that can be removed and others are added to it, but now due to the requirements, the order
                                                              has been made."</p>  
                                                </div>
                                              </div>
                                              
                                              <div class="split right">
                                                <div class="centered">
                                                    <h5>Why Bonne Chance?</h5>
                              <p>  Bonne Chance website is website you can add your challenge or any thing you would like to learn language , skill, hope and 
                                so on. <br>  That can gain a skill get a new knowledge.  
                            </p>
                        </div></div>
                        <div class="split left" style="margin-top:400px">
                                <div class="centered">
                                    <h5>The reason behind a project</h5>
                                        <p> "The project idea started from Orange Programming Academy, as there is a final project for every student to do
                                             in order to graduate from the academy.There are some requirements for graduation, if there are some characteristics 
                                             that can be removed and others are added to it, but now due to the requirements, the order
                                              has been made."</p>  
                                </div>
                              </div>
                                <div class="split right" style="margin-top:400px">
                                        <div class="centered">
                                          <p>Type of challenge have two  type:
                                                <br>
                                                    1- Useful challenge  : any think user would like to achieve can add it as challenge 
                                                    (challenge can be learn a language , to do sport all day, gaining skill , 
                                                    drink water and any topic it will get  benefits ), 
                                                    and update the challenge [other user can comments and like the challenge ] , 
                                                    so everyone can helps everyone by commenting motivational sentences if he has experience in a subject.
                                                    <br>2- fun challenge : In order to attract the user there must be something for 
                                                    fun example Ice bucket challenge and any fun idea. 
                                          </p>
                                        </div>
                                </div>
                                      
                                            {{-- <br><br>anyone have challenge (goal or skill) wants to learn achieve and acquire it in other
                                             hand user want enjoy fun time.

                                            From wasting time and most of the time people spend using social media , what about build web sites do useful
                                             things users can create and share content or to participate to motivate other in social networking without wasting time contrariwise can achieve his goal and  skill.
                                            <br> Goals :-<br>

                                            From wasting time and most of the time people spend using social media , what about build web sites do useful things users can create and share content or to participate
                                            to motivate other in social networking without wasting time contrariwise can achieve his goal and  skill.
                                                                            <br>                                           
                                            Technologies and Languages:-

                                             • Linux
                                             • GitHub
                                             • Visual Studio
                                             • Laravel 6
                                             • MySQL
                                             • Booststrap --}}
                                            
                                                <div style="margin-top:1000px">
                                                <br>
                                                <hr>
                                           
                                            <img src="images/nada.jpg" alt="about-bg" class="thumbnail image" style="border-radius:50%;width:50; height:50">
                                            {{-- <h1 style="">Team</h1> --}}
                                           
                                            <h1>Nada Eidah</h1>
                                            <p>Business Administration & Junior Programer .<br>
                                               Graduated Orange Coding Academy<br>
                                            I am finished my Study at Business Administration in The Hashemite University. I have over two years of 
                                                experience in customers serviceand in banking transactions around four years , I Interests Business and like to learn more about it before start my 
                                                Business and Volunteer have good experience in different field . now, I entered to world of Technology through training in programming course. 
                                                I have volunteer experiences in different fields. I looking to learn more to achieve what is beneficial to me and my community.<br>
                                                <a href="https://www.linkedin.com/in/nada-eideh-683316131/?midToken=AQGPINRk0ums7A"><img src="https://img.icons8.com/color/48/000000/linkedin.png"></a>
                                            </p>
                                            </div>
                                </div>
                             </div>
                        </div>
                    </div>
                    <!-- About Section End -->
                   
                    <section class="section-7">
                        <!-- Footer -->
                        <footer class="page-footer font-small stylish-color-dark">
                
                            <!-- Footer Links -->
                            <div class="container text-center text-md-left">
                
                                <!-- Grid row -->
                                <div class="row">
                
                                    <!-- Grid column -->
                                    <div class="col-lg-5 col-sm-12 mx-auto box-1">
                
                                        <!-- Content -->
                                        <a href="index.html"><img src="images/footer-logo.png" alt="footer-logo"></a>
                                        <p>Bonne Chance website is website you can add your challenge or any thing you would like to learn language , skill, hope and so on.</p>
                
                                    </div>
                                    <!-- Grid column -->
                
                                    <hr class="clearfix w-100 d-md-none">
                
                                    <!-- Grid column -->
                                    <div class="col-lg-2 col-sm-4 box-2 mx-auto">

                                            <!-- Links -->
                                            <h5>Show all</h5>
                    
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="index.html">go to home</a>
                                                </li>
                                                <li>
                                                    {{-- <a href="services.html">services</a> --}}
                                                    <a href="/post2">Fun challenge</a>
                                                </li>
                                                
                    
                                                <li>
                                                    <a href="/post">Useful challenge</a>
                    
                                                </li>
                                                <li>
                                                    <a href="/works"> post</a>
                                                </li>
                                            </ul>
                    
                                        </div>
                                    <!-- Grid column -->
                
                                    <hr class="clearfix w-100 d-md-none">
                
                                    <!-- Grid column -->
                                    <div class="col-lg-2 col-sm-4 box-3 mx-auto">

                                            <!-- Links -->
                                            <h5>create</h5>
                    
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a href="/post2/create">Fun challenge</a>
                                                </li>
                                                <li>
                                                    <a  href="/post/create">Useful challenge</a>
                                                </li>
                                                <li>
                                                    <a href="/works/create"> post</a>
                                                </li>
                                                <li>
                                                    <a  href="/steps/create">step</a>
                                                   
                                                </li>
                                            </ul>
                    
                                        </div>
                                    <!-- Grid column -->
                
                                    <hr class="clearfix w-100 d-md-none">
                
                                    <!-- Grid column -->
                                    <div class="col-lg-2 col-sm-4 box-4 mx-auto">

                                            <!-- Links -->
                                            <h5>Other & Info</h5>
                    
                                            <ul class="list-unstyled">
                                                <li>
                                                    <a class="nav-link" href="/about">about</a>
                    
                                                </li>
                                                <li>
                                                    <a href="#!">Contract to Stat.</a>
                                                </li>
                                                <li>
                                                    <a href="#!">Plan Challenge.</a>
                                                </li>
                                                <li>
                                                    <a href="#!">How to Plan ?</a>
                                                </li>
                                           
                                            </ul>
                    
                                        </div>
                                            <!-- Links -->
                                            
                    
                                        </div>
                                    <!-- Grid column -->
                
                                </div>
                                <!-- Grid row -->
                
                            </div>
                            <!-- Footer Links -->
                
                            <!-- Copyright -->
                            <div class="footer-copyright text-center">
                                <div class="gradient"></div>
                                <p>© 2019, All Rights reserved. more theme, designed by<a href="https://www.template.net/editable/websites/html5"> Nada.net</a></p>
                            </div>
                            <!-- Copyright -->
                
                        </footer>
                        <!-- Footer -->
                    </section>
                
                    <!-- Optional JavaScript -->
                    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
                    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
                    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
                    <script src="js/animate.js"></script>
                    <script src="js/custom.js"></script>
                </body>
                
                </html>
                
        </div>
    </div>

@endsection
