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
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">

    <title>more</title>
    <style>
    .jumbotron {width: 100%;height: 250px;}
        .jumbotron h2 {padding-bottom: 0;}
    .ss{
        border: 2px ridge #B39784;
    }
    .theTitle{
       color: #B8835E; 
    }
    .footerBut{
        display: grid;
  grid-template-columns: auto auto auto;
    }
    </style>
</head>

<body>
    <!--Section-1-->
    <section class="section-1">
        <div class="jumbotron d-flex align-items-center" style="background-color:#B39784 ">
            <div class="gradient"></div>
            <div class="container-fluid content">
                <h1 data-aos="fade-right" data-aos-delay="300">show more Fun challenge.</h1>
                <h2 data-aos="fade-left" data-aos-delay="300">"When Fun gets deep enough , it can heal the world"</h2>
            </div>
            <!--container-fluid end-->
        </div>
    </section>
    
    <!--Services-->
    <section class="services">
        <div class="container ss">
            <div class="row">
                    <div class="row" style="border-bottom: 2px ridge; margin-left: 100px;">
                            <div class="col-sm-5 col-md-6">
                                <div class="inner-text">
                                    <h3>In {{$post2->created_at}} Posted by <span><a href="#">{{$post2->user->name}}</a></span> </h3>
                                </div>
                            </div>
                            <div class="col-sm-4 align-self-center text-right">
                                <div class="social-icons">
                                   
                                    <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <img src="https://img.icons8.com/color/25/000000/tiktok.png">  
                                    <img src="https://img.icons8.com/color/30/000000/snapchat-circled-logo.png">                     
                                     {{-- <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a> --}}
                                </div>
                            </div>
                        </div>
                <div class="col-sm-12 col-12 box-1"  data-aos="fade-up" data-aos-delay="300">
                    <div class="row"  style=" margin: 20px">
                        <div class=" col-8">
                            <div class="content">
                                <div class="title m-b-md">
                                   <div class="list-group"><hr/>
                                        <div class="card-body">
                                          <h3 class="card-title">
                                               <span class="theTitle"> The challenge title:</span>  {{$post2->title}}
                                            </h3><br>
                                            {{-- <img src="{{$post2->featrued}}" class="img-fluid" class="img-fluid"> --}}

                                          <h3> 
                                                <span class="theTitle">The challenge is:</span>{{$post2->content}}
                                        </h3><br>
                                          <h3>
                                                <span class="theTitle">category:</span>{{$post2->category->name}}
                                        </h3><br>
                                        <hr>
                                        <div class="footerBut">
                                           
                                       
                                      <div>  <a href="/post2/{{$post2->id}}/edit" class="btn btn-secondary">eidt</a></div>
                                     <div>
                                        {!! Form::open(['action' => ['Posts2Controller@destroy',$post2->id], 'method'=>'post']) !!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('delete')}}
                                        {!! Form::close() !!}
                                     </div>
                                     <div>   <a href="/post2" class="btn btn-secondary">back</a> </div>
                        
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </section>
   
    <section class="section-7">
        <!-- Footer -->
       
        <!-- Footer -->
    </section>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
</body>

</html>

@endsection
