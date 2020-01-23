@include('includes.header')

<body>

    <!--Section-1-->
    <section class="section-1">
        <div class="jumbotron d-flex align-items-center">
            <div class="gradient"></div>
            <div class="container-fluid content">
                <h1 data-aos="fade-right" data-aos-delay="300">Welcome to more about the challenge.</h1>
                <h2 data-aos="fade-left" data-aos-delay="300">the multipurpose psd wordrpess theme</h2>
            </div>
            <!--container-fluid end-->
        </div>
    </section>

    <!-- blog-single Section Start -->
    <div id="blog-single">
            <div class="col-sm-7 col-md-6">
                    <ul class="mbm_social">
                        <li><a class="social-facebook" href="#">
                <i class="fa fa-facebook"><small>1.2m</small></i>
                
                <div class="tooltip"><span>facebook</span></div>
                </a>
                        </li>
                        <li><a class="social-twitter" href="#">
                <i class="fa fa-twitter"><small>448.6k</small></i>
                <div class="tooltip"><span>Twitter</span></div>
                </a>
                        </li>
                        <li><a class="social-google-plus" href="#">
                <i class="fa fa-pinterest" aria-hidden="true"><small>111.7k</small></i>
                <div class="tooltip"><span>google+</span></div>
                </a>
                        </li>
                    </ul>
                </div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 col-12 heading-1">
                    <h3>{{$post->title}}</h3>
                </div>
            </div>
        </div>
        <hr>
        <div class="container">
            <div class="row" data-aos="fade-up" data-aos-duration="700">
                <div class="col-sm-12">
                    <img src="images/index.jpg" alt="" class="img-thumbnail image">
                    <div class="heading">
                        <h2>all information about the challenge is :</h2>
                    </div>
                </div>
            </div>
            <div class="social-buttons" data-aos="fade-up" data-aos-duration="700">
                <div class="row">
                    <div class="col-sm-5 col-md-6">
                        <div class="inner-text">
                            <h3>{{$post->created_at->diffForHumans()}} Posted by <span>{{$post->user->name}}</h3>
                            {{-- </span> In : <span><a href="#">Fashion</a></span> --}}
                        </div>
                    </div>
            
                </div>
            </div>
            <div class="row" data-aos="fade-up" data-aos-duration="700">
                <div class="col-sm-12 col-lg-12 box">
                   <p>
                        <li>my tools:{{$post->tools}}</li>
                        <li>time :{{$post->time}}</li>
                        <li>my decrebtion {{$post->body}}</li>
                        <li>{{$post->created_at->diffForHumans()}} Posted by <span>{{$post->user->name}}</li>
                   </p>
                   <p></p>
                </div>
            </div>
            <section class="section4 more-blog" data-aos="fade-up" data-aos-duration="700">
                <h2 class="background"><span>Similar Posts</span></h2>
                <div class="container">
                    <div class="row" data-aos="fade-up" data-aos-duration="700">
                        <div class="card-deck">
                            <div class="card">
                                <img class="card-img-top" src="images/portfolio-2.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <a class="btn btn-primary" href="blog.html" role="button">Photography</a>
                                    <p class="card-text"><small class="text-muted">January 24th 2017</small></p>
                                    <p class="card-text"><a href="blog_single.html">Beautiful girl dancing wearing beach wear for photoshoot!</a></p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="images/portfolio-3.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <a class="btn btn-primary" href="blog.html" role="button">Photography</a>
                                    <p class="card-text"><small class="text-muted">January 24th 2017</small></p>
                                    <p class="card-text"><a href="blog_single.html">Beautiful girl dancing wearing beach wear for photoshoot!</a></p>
                                </div>
                            </div>
                            <div class="card">
                                <img class="card-img-top" src="images/portfolio-5.jpg" alt="Card image cap">
                                <div class="card-body">
                                    <a class="btn btn-primary" href="blog.html" role="button">Photography</a>
                                    <p class="card-text"><small class="text-muted">January 24th 2017</small></p>
                                    <p class="card-text"><a href="blog_single.html">Beautiful girl dancing wearing beach wear for photoshoot!</a></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <!-- Blog_single Section End -->

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
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five</p>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="col-lg-2 col-sm-4 box-2 mx-auto">

                        <!-- Links -->
                        <h5>Site Navigation</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="index.html">go to home</a>
                            </li>
                            <li>
                                <a href="services.html">services</a>
                            </li>
                            <li>
                                <a href="portfolio.html">portfolio</a>
                            </li>
                            <li>
                                <a href="blog.html">read blog</a>
                            </li>
                            <li>
                                <a href="contact.html">contact us</a>
                            </li>
                            <li>
                                <a href="contact.html">product support</a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="col-lg-2 col-sm-4 box-3 mx-auto">

                        <!-- Links -->
                        <h5>information</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">user login</a>
                            </li>
                            <li>
                                <a href="#!">creat new account</a>
                            </li>
                            <li>
                                <a href="#!">checkout</a>
                            </li>
                            <li>
                                <a href="#!">my cart</a>
                            </li>
                            <li>
                                <a href="#!">other information</a>
                            </li>
                        </ul>

                    </div>
                    <!-- Grid column -->

                    <hr class="clearfix w-100 d-md-none">

                    <!-- Grid column -->
                    <div class="col-lg-2 col-sm-4 box-4 mx-auto">

                        <!-- Links -->
                        <h5>policies & Info</h5>

                        <ul class="list-unstyled">
                            <li>
                                <a href="#!">Terms Conditions </a>
                            </li>
                            <li>
                                <a href="#!">website polocy</a>
                            </li>
                            <li>
                                <a href="#!">Policy for Sellers </a>
                            </li>
                            <li>
                                <a href="#!">Policy for Buyers</a>
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
                <p>© 2017, All Rights reserved. more theme, designed by<a href="https://www.template.net/editable/websites/html5"> tEMPLATE.net</a></p>
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
