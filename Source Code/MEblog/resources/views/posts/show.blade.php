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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">

    <title>allPost</title>
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
                <h1 data-aos="fade-right" data-aos-delay="300">show the Useful challenge.</h1>
                {{-- <h2 data-aos="fade-left" data-aos-delay="300">the multipurpose psd wordrpess theme</h2> --}}
            </div>
            
            <!--container-fluid end-->
        </div>
    </section>
    
    
    <!--Services-->
    <section class="services" >

        <div class="container ss" >
            <div class="row" >
                    <div class="row" style="border-bottom: 2px ridge; margin-left: 100px;">
                            {{-- style="border-style: ridge" --}}
                            <div class="col-sm-5 col-md-6">
                                <div class="inner-text">
                                    <h3>In {{$post->created_at}} Posted by <span><a href="#">{{$post->user->name}}</a></span> </h3>
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
                    <div class="row " >
         
                        <div class=" col-8">
                            <div class="content">
                                <div class="title m-b-md">
                                   {{-- <h1> all funcation  challenge dichrebiton  challenge</h1> --}}
                                   <div class="list-group"><hr/>
                                        <div class="card-body">
                                          <h3 class="card-title"> <span class="theTitle">The challenge is:</span> {{$post->title}}</h3><br>
                                          <h4> <span class="theTitle">Tools: </span>{{$post->tools}}
                                            <span class="theTitle">Time: </span>{{$post->time}} month</h4> <br>
                                            {{-- <span class="theTitle">category:</span>{{$post2->category->id}} --}}

                                            <h4> <span class="theTitle"> Descrepation:</span> {{$post->body}}</h4><br>
                                        <hr>
                                        <div class="footerBut">
                                           
                        
                                      <div>
                                        <a href="/post/{{$post->id}}/edit" class="btn btn-secondary">eidt</a>
                                     
                                      </div>
                                      
                                      <div>
                                        {!! Form::open(['action' => ['PostsController@destroy',$post->id], 'method'=>'post']) !!}
                                        {{Form::hidden('_method','DELETE')}}
                                        {{Form::submit('delete')}}
                                        {!! Form::close() !!}
                                      </div>
                                      <div>
                                            <a href="/post" class="btn btn-secondary">back</a>
                                          </div>
                                    </div>
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
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="js/animate.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>

@endsection
