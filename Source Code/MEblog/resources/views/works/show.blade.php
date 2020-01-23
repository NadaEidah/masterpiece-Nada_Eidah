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

    <title>allPost</title>
    <style>
    .jumbotron {width: 100%;height: 250px;}
    .jumbotron h2 {padding-bottom: 0;}
   
    </style>
</head>

<body>
    <!--Section-1-->
    
    <section class="section-1">
        <div class="jumbotron d-flex align-items-center" style="background-color:#B39784 ">
            <div class="gradient"></div>
            <div class="container-fluid content">
                <h1 data-aos="fade-right" data-aos-delay="300">Post Day work.</h1>
                {{-- <h2 data-aos="fade-left" data-aos-delay="300">the multipurpose psd wordrpess theme</h2> --}}
            </div>
            
            <!--container-fluid end-->
        </div>
    </section>
    

<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-body">
                        {{-- <h3 class="text-center text-success">Post</h3> --}}
                        <br/>
                        <div>
                        <h2 style=" margin-left: 20px;">{{ $work->title }}</h2>
                        
                        <p style=" margin-left: 30px;">
                          <span style="color:#B8835E;"> The Post:</span> {{ $work->body }}
                        </p>
                        </div>
                        <hr />
                        <h6 style="color:#B8835E;"> Comments</h6>
      
                        @include('works.commentsDisplay', ['comments' => $work->comments, 'work_id' => $work->id])
    
                        <hr />
                        <h4>Add comment</h4>
                        <form method="post" action="{{ route('comments.store'   ) }}">
                            @csrf
                            <div class="form-group">
                                <textarea class="form-control" name="body"></textarea>
                                <input type="hidden" name="work_id" value="{{ $work->id }}" />
                            </div>
                            <div class="form-group">
                                <input type="submit" class="btn btn-success" value="Add Comment" />
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="section-7">
            <!-- Footer -->
           
            <!-- Footer -->
        </section>
</body>
</html>
@endsection