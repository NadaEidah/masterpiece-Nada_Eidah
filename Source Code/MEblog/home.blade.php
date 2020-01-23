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
    <title>MyDashboard</title>
    <style>
    .jumbotron {width: 100%;height: 250px;}
    .jumbotron h2 {padding-bottom: 0;}
  
    </style>
</head>
<body>
<div class="container">
    <div class="row" style=" margin-top:30px;">
        <div class="">
            <div class="card">
                <div class="">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                   
                    <div class="row" >
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                                <div class="" >
                                    <div class="" >
                                      <h5>user about me........... </h5><br>
                                      <h5><span style="color:red">My name:</span> {{ Auth::user()->name }}</h5>
                                      <h5><span style="color:red">My email:</span>  {{ Auth::user()->email }}</h5> 
                                    </div>
                                </div>
                            </div>
                          </div>
                        </div>
                        <div class="col-sm-6">
                          <div class="card">
                            <div class="card-body">
                          
                              <button class="nav-item"><a class="nav-link" href="/"> home</a></button>

                                <button class="nav-item"><a class="nav-link" href="/info"> my info</a></button>
                                {{-- <button class="nav-item"><a class="nav-link" href="/post">all challenge</a></button>
                                <button class="nav-item"><a class="nav-link" href="/works">all post</a></button> --}}
                                <button class=""><a class="nav-link" href="/post/create">New challenge useful </a></button>
                                <button class="nav-item"><a class="nav-link" href="/post2/create">New challenge fun</a></button>
                                <button class="nav-item"><a class="nav-link" href="/works/create">New post</a></button>
                                <button class="nav-item"><a class="nav-link" href="/steps/create">New step</a></button>
                                <a class="dropdown-item" href="/steps">all step</a>
                            </div>
                          </div>
                        </div>
                      </div>

                 
                    <br>
                    <div>
               

                    </div>
                    <hr>
<div class="container">
    <div class="row">
      <div class="col-sm">
          <h3>My Useful chall</h3>
          @foreach ($posts as $post)
          <div>
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title">{{$post->title}}</h5>
                 
                  </div>
                  <div class="modal-body">
                    <p>{{$post->body}}</p>
                  </div>
                  <p style="margin-left: 150px">{{ date('d-m-Y', strtotime($post->created_at)) }}</p>

                  <div class="modal-footer">
                    <button href="/posts/{{$post->id}}/edit" type="button" class="btn btn-primary">edit</button>
                    <a href="/post/{{$post->id}}" class="btn btn-primary">more</a>

                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                    {{-- <a href="/post" class="btn btn-secondary">back</a> --}}
                    {!! Form::open(['action' => ['PostsController@destroy',$post->id], 'method'=>'post']) !!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('delete')}}
                  </div>
                </div>
              </div>
            </div>
            @endforeach
      </div>
      <div class="col-sm">
          <h3>My Step</h3>
          <div>
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title">all step is:</h5>
                  </div>
                  @foreach ($steps as $step)
                  <div class="modal-body">
                    <p>-{{$step->step}}</p>
                    <td>{{ date('d-m-Y', strtotime($step->created_at)) }}</td>

                  </div>
                  <form action="{{ route('steps.destroy', $step->id)}}" method="post">
                      {{ csrf_field() }}
                      @method('DELETE')
                      <button class="btn btn-danger" type="submit">Delete</button>
                    </form>
                  
                  @endforeach
                  
                
                </div>
              </div>
            </div>
      </div>
      <div class="col-sm">
          <h3>My Post</h3>
          @foreach ($works as $work)
          <div>
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title">{{$work->title}}</h5>
                  </div>
                  <div class="modal-body">
                    <p>{{$work->body}}</p>
                  </div>
                  <div class="modal-footer">
                    {{-- <button href="/works/{{$work->id}}/edit" type="button" class="btn btn-primary">edit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <a href="/work" class="btn btn-secondary">back</a> --}}
                    <td>
                          <a href="{{ route('works.show', $work->id) }}" class="btn btn-primary">go to communt</a>
                      </td>
                  </div>
                </div>
              </div>
            </div>
            @endforeach
      </div>

      <div class="col-sm">
          <h3>My FUN chall</h3>
          @foreach ($posts2 as $post2)
          <div>
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                  <h5 class="modal-title">{{$post2->title}}</h5>
                  </div>
                  <div class="modal-body">
                    <p>{{$post2->content}}</p>
                  </div>
                  <p style="margin-left: 150px">{{ date('d-m-Y', strtotime($post2->created_at)) }}</p>

                  <div class="modal-footer">
                    <button href="/posts2/{{$post2->id}}/edit" type="button" class="btn btn-primary">edit</button>
                    <a href="/post2/{{$post2->id}}" class="btn btn-primary">more</a>

                    {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                    {{-- <a href="/post" class="btn btn-secondary">back</a> --}}
                    {!! Form::open(['action' => ['Posts2Controller@destroy',$post->id], 'method'=>'post']) !!}
                    {{Form::hidden('_method','DELETE')}}
                    {{Form::submit('delete')}}
                  </div>
                </div>
              </div>
            </div>
            @endforeach
      </div>
    </div>
  </div>

@endsection
