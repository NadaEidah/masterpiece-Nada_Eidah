@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ekko-lightbox/5.3.0/ekko-lightbox.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">

    <title>fun post</title>
    <style>
    .jumbotron {width: 100%;height: 250px;}
    .jumbotron h2 {padding-bottom: 0;}
   
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

    <!--Section-1-->
    <section class="section-1">
        <div class="jumbotron d-flex align-items-center">
            <div class="gradient"></div>
            <div class="container-fluid content">
                <h1 data-aos="fade-right" data-aos-delay="300">Bounn Channs.</h1>
                <h2 data-aos="fade-left" data-aos-delay="300">challenge for new opportunity</h2>
            </div>
            <!--container-fluid end-->
        </div>
    </section>
    
    <!--Section-5-->
    <section class="portfolio" style="margin-left:200px">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-12">
                    <h3>all fun challenges</h3>
                </div>
            </div>
        </div>
        <div class="load-more" >
                <a href="/post2/create"  class="btn btn-secondary">create</a>
        </div>
        <hr>
    

        
        @if ($posts2->count()>0)
        @foreach ($posts2 as $post2)
        <div class="container-fluid">
            <div class="row " data-aos="fade-up" data-aos-delay="300" >
                <a href="{{$post2->featrued}}" data-toggle="lightbox" data-gallery="example-gallery" class="col-sm-3 box">
                  <img src="{{$post2->featrued}}" class="img-fluid" class="img-fluid">
                  <div class="overlay">
                  {{-- <img src="images/plus-img.png" alt="plus-icon"> --}}
                  <div class="inner-text">
                    <h4>{{$post2->title}}</h4>
                    <h4>{{$post2->content}}</h4>
                    <h4>{{$post2->created_at}} </h4></div>
                  </div>
                </a>
                {{-- <a href="/post2/{{$post2->id}}" class="btn btn-success">+more</a> --}}
           
        @endforeach
        @else  
            <p scope='row' class="text-center">No posts</p>
        @endif
    </div>
        </div>
        <!--/row-->
        {{-- <hr>
        <div class="load-more">
            <button type="button" class="btn btn-secondary">load more</button>
        </div>  --}}
        <!--container-->
        

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

@endsection



