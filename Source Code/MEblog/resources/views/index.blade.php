@include('includes.header')

<body>
    <header class="header bg">
        <div class="container text-white">
            <div class="row">
                <div class="col-sm-4 align-self-center text-left">
                    <h6>YCDI 2019</h6>
                </div>
                <div class="col-sm-4 col-12 align-self-center box-1 text-center">
                    {{-- <a class="navbar-brand" href="index.html"></a> --}}
                        <img src="images/header-logo.png" alt="logo">
                </div>
                <div class="col-sm-4 align-self-center text-right">
                    <div class="social-icons">
                       
                        <a href="https://www.facebook.com/"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                        <a href="https://twitter.com/"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                        <a href="https://www.tiktok.com/en/"> <img src="https://img.icons8.com/color/25/000000/tiktok.png">  </a>
                        <a href="https://accounts.snapchat.com/accounts/login?continue=https%3A%2F%2Faccounts.snapchat.com%2Faccounts%2Fwelcome"> <img src="https://img.icons8.com/color/30/000000/snapchat-circled-logo.png">    </a>                 
                         {{-- <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> --}}
                    </div>
                </div>
            </div>
            <!--/row-->
        </div>
        <!--container-->
    </header>
    <span class="position-absolute trigger"><!-- hidden trigger to apply 'stuck' styles --></span>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    BounnChanns
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbar1">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav ">
                        <li class="nav-item"><a class="nav-link" href="/about">about</a></li>
                        {{-- <li class="nav-item"><a class="nav-link" href="/post">all challenge</a></li> --}}
                        {{-- <li class="nav-item"><a class="nav-link" href="/works">all post</a></li> --}}

                    </li>
                    <li class="nav-item dropdown">
                            <a class="nav-link  dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              {{-- posts2 --}} Fun 
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="/post2/create">create</a>
                              <a class="dropdown-item" href="/post2">all challenge</a>
                            </div>
                    </li>

                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              {{-- posts --}} Useful 
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="/post/create">create</a>
                              <a class="dropdown-item" href="/post">all challenge</a>
                    </li>
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              {{-- step --}} Step
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="/steps/create">create</a>
                              {{-- <a class="dropdown-item" href="/steps">all step</a> --}}
                    </li>
                    <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              {{-- works --}} Post
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href="/works/create">create</a>
                              <a class="dropdown-item" href="/works">all post</a>
                            
                    </li>
                    {{-- <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              shop
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                              <a class="dropdown-item" href=" http://localhost/wordpress/">shop</a>
                    </li> --}}
                   
                </ul>
                        
                      
                        {{-- @endif --}}
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                         <li class="nav-item">
                                    <a class="nav-link" href="/home">my dashbord</a>
                                </li>
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                               
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                 
                </div>
            </div>
        </nav>

    <!--Section-1-->
    <section class="section-1">
        <div class="jumbotron d-flex align-items-center">
            <div class="gradient"></div>
            <div class="container-fluid content">
                <h1 data-aos="fade-up" data-aos-delay="100">Welcome to Bounn Channs.</h1>
                <h2 data-aos="fade-up" data-aos-delay="300"></h2>
                <h4 data-aos="fade-up" data-aos-delay="500">start challenge ,for new opportunity</h4>
                <p data-aos="fade-up" data-aos-delay="700"><a href="/challenge" class="btn btn-success">Get Started</a></p>
            </div>
            <!--container-fluid end-->
        </div>
    </section>
    <!--Section-2-->
    <section class="section-2">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-sm-12 col-12 box-1">
                    <div class="row box" data-aos="fade-left" data-aos-delay="300">
                        <div class="col-lg-2 col-sm-12">
                            <i class="fa fa-desktop" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-10 col-sm-12">
                        <h3><a href="/works">{{$first_work->title}}</a></h3>
                            <p>{{$first_work->body}}</p>
                            <p>{{$first_work->created_at->diffForHumans()}} </p>
                            <p>    Posted by{{$first_work->user->name}}</p>

                            <p><a href="/works"><img src="images/plus.png" alt="plus"></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-12 box-2">
                    <div class="row box" data-aos="fade-left" data-aos-delay="500">
                        <div class="col-lg-2 col-sm-12">
                            <i class="fa fa-code" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-10 col-sm-12">
                            <h3><a href="/works">{{$second_work->title}} .</a></h3>
                            <p>{{$second_work->body}}</p>
                            <p>{{$second_work->created_at->diffForHumans()}}</p>
                             <p>    Posted by {{$second_work->user->name}}</p>

                            <p><a href="/works"><img src="images/plus.png" alt="plus"></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-12 col-12 box-3">
                    <div class="row box" data-aos="fade-left" data-aos-delay="700">
                        <div class="col-lg-2 col-sm-12">
                            <i class="fa fa-comments-o" aria-hidden="true"></i>
                        </div>
                        <div class="col-lg-10 col-sm-12">
                            <h3><a href="/works">{{$third_work->title}}.</a></h3>
                            <p>{{$third_work->title}} </p>
                            <p>{{$third_work->created_at->diffForHumans()}} </p>
                                <p>Posted by {{$third_work->user->name}}</p>
                            <p><a href="/works"><img src="images/plus.png" alt="plus"></a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="section-3">
        <div class="container">
            <div class="row m-0">
                <div class="col-lg-5 col-md-12 p-0" data-aos="fade-right" data-aos-delay="300">
                    <h2>What Can do <span>And How can it be useful?</span></h2>
                    <ul>
                        <li><a href="/challenge"><i class="fa fa-angle-right" aria-hidden="true"> Contract to Start</i></a> </li>
                        <li><a href="https://www.lifehack.org/articles/lifehack/9-steps-to-define-your-goal-destination-and-devise-a-plan-to-get-there.html"><i class="fa fa-angle-right" aria-hidden="true"> How to Plan Challenge</i></a></li>
                        <li><a href="https://www.mindtools.com/pages/article/newHTE_90.htm"><i class="fa fa-angle-right" aria-hidden="true"> How to Success Plan?</i></a></li>
                        <li><a href="https://hbr.org/search?search_type=search-all&term=time+mangment"><i class="fa fa-angle-right" aria-hidden="true">Time Mangment</i></a></li>
                        <li><a href="https://zapier.com/blog/learning-new-skills/"><i class="fa fa-angle-right" aria-hidden="true"> How to Learning New Skills?</i></a></li>
                        <li><a href="https://www.rattibni.com/"><i class="fa fa-angle-right" aria-hidden="true">Three days to rearrange starting again!</i></a></li>
                    </ul>
                </div>
                <div class="col-lg-7 col-md-12 p-0" data-aos="fade-left" data-aos-delay="300">
                    <figure>
                        <img class="inner-img" src="images/services-bg2.jpg" alt="services">
                        <img class="out-sideimg" src="images/services-bg.jpg" alt="services">
                    </figure>
                </div>
            </div>
        </div>
    </section>
    <section class="section-4">
        <div class="container">
            <div class="row heading">
                <div class="col-sm-6 col-12">
                    <h3>Read All Challenges<span>And can help and inspiration other</span></h3>
                </div>
                <div class="col-sm-6 col-12">
                    <a href="/post" class="btn btn-success">Read our full Useful Challenges</a>
                </div>
            </div>
           
            <!--/row-->
            <div class="row">
                <div class="col-lg-4 col-sm-12 col-12 box-1"  data-aos="fade-right" data-aos-delay="300">
                    <figure class="figure">
                        <a href="blog.html"><img src="images/blog-1.jpg" class="figure-img img-fluid" alt="blog"></a>
                        <figcaption class="figure-caption">
                            <h2><a href="/post">{{$first_post->title}}</a></h2>
                            {{-- <h2><a href="/post">{{$first_post->user_id}}</a></h2> --}}

                            <p>{{$first_post->body}}</p>
                        <a href="/post" class="btn btn-success">+ more</a>
                        </figcaption>
                    </figure>
                </div>
                <div class="col-lg-8 col-sm-12 col-12" data-aos="fade-left" data-aos-delay="300">
                    <div class="row" >
                        <div class="col-sm-6 col-12 box-2">
                            <figure class="figure">
                                <a href="/post"><img src="images/blog-2.jpg" class="figure-img img-fluid" alt="blog"></a>
                            </figure>
                        </div>
                        <div class="col-sm-6 col-12 box-3">
                            <h4><a href="/post">{{$second_post->title}}</a></h4>
                            <h5>{{$second_post->body}}</h5>
                            <a href="/post" class="btn btn-success">+ more</a>
                            {{-- /{{$second_post->id}} --}}
                        </div>
                    </div>
                    
                    <div class="row">
                        <div class="col-sm-6 col-12 box-4">
                            <figure class="figure">
                                <a href="/post"><img src="images/blog-3.jpg" class="figure-img img-fluid" alt="blog"></a>
                            </figure>
                        </div>
                        <div class="col-sm-6 col-12 box-5">
                            <h4><a href="/post">{{$third_post->title}} </a></h4>
                            <h5>{{$third_post->body}}</h5>
                            <a href="/post" class="btn btn-success">+ more</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--container-->
    </section>
    <!--Section-5-->
 <section class="section-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-sm-8">
                    <h3>Check our fun challenges <span>view some of the best challenges</span></h3>
                </div>
                <div class="col-lg-5 col-sm-4">
                    <a href="/post2" class="btn btn-success">Read our challenges all Fun</a>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row"  data-aos="fade-up" data-aos-delay="300">
                <a href="{{$first_post2->featrued}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 box">
                  <img src="{{$first_post2->featrued}}" class="img-fluid">
                  <div class="overlay">
                  <img src="images/plus-img.png" alt="plus-icon">
                  <div class="inner-text"><h4>{{$first_post2->title}} <span>top view</span></h4></div>
                  </div>
                </a>
                <a href="{{$second_post2->featrued}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 box">
                  <img src="{{$second_post2->featrued}}" class="img-fluid">
                  <div class="overlay">
                  <img src="images/plus-img.png" alt="plus-icon">
                  <div class="inner-text"><h4>{{$second_post2->title}} <span>top view</span></h4></div>
                  </div>
                </a>
                <a href="{{$third_post2->featrued}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 box">
                  <img src="{{$third_post2->featrued}}" class="img-fluid">
                  <div class="overlay">
                  <img src="images/plus-img.png" alt="plus-icon">
                  <div class="inner-text"><h4>{{$third_post2->title}} <span>top view</span></h4></div>
                  </div>
                </a>
                <a href="{{$four_post2->featrued}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 box">
                        <img src="{{$four_post2->featrued}}" class="img-fluid">
                        <div class="overlay">
                        <img src="images/plus-img.png" alt="plus-icon">
                        <div class="inner-text"><h4>{{$four_post2->title}} <span>top view</span></h4></div>
                        </div>
                 </a>
           
            </div>
            <!--/row-->
        </div> 
        <!--container-->
    </section>
    <section class="section-6" data-aos="fade-up">
        {{-- <div class="container">
            <!-- Grid row-->
            <div class="row main" data-aos="fade-up" data-aos-delay="300">
                <!-- Grid column -->
                <div class="col-lg-6 col-sm-12 col1">
                    <div class="heading">
                        <h3>Subscribe to Newsletter</h3>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-12 col1">
                    <form>
                        <div class="input-group">
                            <input name="email" id="email" type="email" placeholder="Enter your email id" required>
                            <button class="btn btn-info" type="submit">Subscribe</button>
                        </div>
                    </form>
                </div>
            </div>
        </div> --}}
    </section>
    
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
                        {{-- <p>Bonne Chance website is website you can add your challenge or any thing you would like to learn language , skill, hope and so on.</p> --}}

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
                            <li>
                                <a href="#!">Shipping & Refund </a>
                            </li>
                            <li>
                                <a href="#!">Wholesale Policy</a>
                            </li>
                        </ul>

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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.js"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
    <script>
        $(document).on('click', '[data-toggle="lightbox"]', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });

    </script>
</body>

</html>
