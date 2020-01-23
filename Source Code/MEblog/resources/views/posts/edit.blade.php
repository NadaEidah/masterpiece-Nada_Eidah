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
        width: 50%;
       margin-left: 500px;
       margin-top: 100px;
       justify-content: center;
    }
    .theTitle{
       color: #B8835E; 
    }
    .container{
        margin-top: 20px;
        margin-bottom: 20px;
        margin-left: 100px;
    }
    </style>
</head>
<body>
    <div class="ss">
           {{-- <h1> editssss</h1>  --}}

        {!! Form::open(['action' => ['PostsController@update',$post->id], 'method'=>'post']) !!}
        
        <div class="container "> 
                <div class="panel panel-warning">  
                        <div class="panel-heading">
                                <h3 class="panel-title"> Eidt the Usefl challenge </h3> 
                        </div>
                                <div class="panel-body"> 
                                </div>
        <div class="form-group" >
              {{Form::label('title', 'Title')}}
              {{Form::text('title',$post->title)}}
        </div>
        <div class="form-group">
                {{Form::label('tools', 'Tools')}}
                {{Form::text('tools',$post->tools)}}
          </div>
          <div class="form-group">
                {{Form::label('time', 'Time')}}
                {{Form::text('time',$post->time)}}
          </div>
        <div class="form-group">
                {{Form::label('body', 'Dectatipn')}}
                {{Form::textarea('body',$post->body)}}
          </div>
          {{Form::submit('Click Me!')}}
          {{Form::hidden('_method','put')}}
        </div>
    </div>
</div>
       {!! Form::close() !!}

</body>
</html>   
@endsection
