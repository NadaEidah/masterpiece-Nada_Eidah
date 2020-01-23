@extends('layouts.app')

@section('content')
<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/main.css">
    <title>MyDashboard</title>
    {{-- <style>
   
   
    </style> --}}

<style>

   .jumbotron {width: 100%;height: 250px;}
    .jumbotron h2 {padding-bottom: 0;}
      .fullscreen_bg {
      position: fixed;
      top: 0;
      right: 0;
      bottom: 0;
      left: 0;
      background-size: cover;
      background-position: 50% 50%;
      /* background-image: url('http://blog.transfer-iphone-recovery.com/images/photo-with-blur-background.jpg'); */
      background-repeat:repeat;
    }
    /*  bhoechie tab */
    div.bhoechie-tab-container{
    z-index: 10;
    background-color: #ffffff;
    padding: 0 !important;
    border-radius: 4px;
    -moz-border-radius: 4px;
    border:1px solid #ddd;
    margin-top: 150px;
    /* margin-left: 20px; */
    -webkit-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    box-shadow: 0 6px 12px rgba(0,0,0,.175);
    -moz-box-shadow: 0 6px 12px rgba(0,0,0,.175);
    background-clip: padding-box;
    opacity: 0.97;
    filter: alpha(opacity=97);
    width: 9000px;
    }
    div.bhoechie-tab-menu{
    padding-right: 0;
    padding-left: 0;
    padding-bottom: 0;
    }
    div.bhoechie-tab-menu ul.list-group{
    margin-bottom: 0;
    list-style:none;
    width: 200px;
    }
    div.bhoechie-tab-menu ul.list-group>a{
    margin-bottom: 0;
    text-align:center;
    }
    div.bhoechie-tab-menu ul.list-group>a .glyphicon,
    div.bhoechie-tab-menu ul.list-group>a .fa {
    color: #00001a;
    }
    /* div.bhoechie-tab-menu ul.list-group>a:first-child{
    border-top-right-radius: 0;
    -moz-border-top-right-radius: 0;
    } */
    div.bhoechie-tab-menu ul.list-group>a:last-child{
    border-bottom-right-radius: 0;
    -moz-border-bottom-right-radius: 0;
    }
    div.bhoechie-tab-menu ul.list-group>a.active,
    div.bhoechie-tab-menu ul.list-group>a.active .glyphicon,
    div.bhoechie-tab-menu ul.list-group>a.active .fa{
    background-color: #86D333; /* change heir */
    /* background-image: red; */
    color: #ffffff;
    border-color: green;
    }
    div.bhoechie-tab-menu ul.list-group>a.active:after{
    content: '';
    position: absolute;
    left: 100%;
    top: 50%;
    margin-top: -13px;
    border-left: 0;
    border-bottom: 13px solid transparent;
    border-top: 13px solid transparent;
    border-left: 10px solid #406617; /* change heir */
    
    }

    div.bhoechie-tab-content{
    background-color: #ffffff;
    /* border: 1px solid #eeeeee; */
    padding-left: 20px;
    padding-top: 10px;
    }

    div.bhoechie-tab div.bhoechie-tab-content:not(.active){
    display: none;
    }

    .bns{
    display: grid;
    grid-template-columns:  auto 70% ;
  
}

  </style>
<script>
  $(document).ready(function() {
  $("div.bhoechie-tab-menu>ul.list-group>a").click(function(e) {
      e.preventDefault();
      $(this).siblings('a.active').removeClass("active");
      $(this).addClass("active");
      var index = $(this).index();
      $("div.bhoechie-tab>div.bhoechie-tab-content").removeClass("active");
      $("div.bhoechie-tab>div.bhoechie-tab-content").eq(index).addClass("active");
  });
});
  </script>
</head>
<body>

    <div id="fullscreen_bg" class="fullscreen_bg">
<div class="container">
    <div class=" col-md-12 col-sm-8 col-xs-9 bhoechie-tab-container bns">
     
        <div class="col-lg-3 col-md-3 col-sm-3 col-xs-3 bhoechie-tab-menu">
          <ul class="list-group">
              <a href="#" class="list-group-item active">
                  <br/><br/><i class="glyphicon glyphicon-home"></i>Home<br/><br/>
                  </a>
                <a href="#" class="list-group-item ">
                  <br/><br/><i class="glyphicon glyphicon-tasks"></i>Useful<br/><br/>
                </a>  
                <a href="#" class="list-group-item ">
                  <br/><br/><i class="glyphicon glyphicon-transfer"></i>FUN<br/><br/>
                </a>
                <a href="#" class="list-group-item">
                  <br/><br/><h4 class="glyphicon glyphicon-wrench"></h4>Post<br/><br/>
                </a>
                <a href="#" class="list-group-item">
                    <br/><br/><h4 class="glyphicon glyphicon-wrench"></h4>Step<br/><br/>
                  </a>
              </ul>
            </div>
    {{-- <div class="row" style=" margin-top:30px;">
        <div class="">
            <div class="card">
                <div class=""> --}}
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 bhoechie-tab">
                        <!-- flight section -->
                        <div class="bhoechie-tab-content active">
                            <center>
                              <div>
                                <h5>user about me........... </h5><br>
                                <h5><span style="color:red">My name:</span> {{ Auth::user()->name }}</h5>
                                <h5><span style="color:red">My email:</span>  {{ Auth::user()->email }}</h5> 
                                <hr>

                                <button class="btn btn-primary"><a class="nav-link" href="/challenge">To start</a></button>
                                <button class="btn btn-secondary"><a class="nav-link" href="/"> home</a></button> 
                                <button class="btn btn-info"><a class="nav-link" href="/info"> my info</a></button><br><br>
                                {{-- <button class="nav-item"><a class="nav-link" href="/post">all challenge</a></button>
                                <button class="nav-item"><a class="nav-link" href="/works">all post</a></button> --}}
                                <button class="btn btn-success"><a class="nav-link" href="/post/create">New challenge useful </a></button>
                                <button class="btn btn-success"><a class="nav-link" href="/post2/create">New challenge fun</a></button><br><br>
                                <button class="btn btn-success"><a class="nav-link" href="/works/create">New post</a></button>
                                <button class="btn btn-success"><a class="nav-link" href="/steps/create">New step</a></button>
                                {{-- <a class="dropdown-item" href="/steps">all step</a> --}}
                              </div>
                            </center>
                        </div>
                      
                      
                        <div class="bhoechie-tab-content" >
                            <center>
                                <h3>My Useful challenge</h3>
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
                                          {{-- <button href="/posts/{{$post->id}}/edit" type="button" class="btn btn-primary">edit</button> --}}
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
                            </center>
                        </div>
            
                       
                        <div class="bhoechie-tab-content" >
                            <center>
                                <div class="col-sm">
                                    <h3>My FUN challenge</h3>
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
                                              {{-- <button href="/posts2/{{$post2->id}}/edit" type="button" class="btn btn-primary">edit</button> --}}
                                              <a href="/post2/{{$post2->id}}" class="btn btn-primary">more</a>
                            
                                              {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                                              {{-- <a href="/post" class="btn btn-secondary">back</a> --}}
                                              {!! Form::open(['action' => ['Posts2Controller@destroy',$post2->id], 'method'=>'post']) !!}
                                              {{Form::hidden('_method','DELETE')}}
                                              {{Form::submit('delete')}}
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                      @endforeach
                                </div>
                            </center>
                        </div>

                        <div class="bhoechie-tab-content">
                            <center>
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
                            </center>
                        </div>

                        <div class="bhoechie-tab-content">
                            <center>
                          <div class="" >
                              <h3>My Step:</h3>
                              <div>
                                  <div class="">
                                    <div class="">
                                        {{-- modal-content --}}
                                    
                                      @foreach ($steps as $step)
                                      <div class="">
                                        <p>-{{$step->step}}</p>
                                        <td>{{ date('d-m-Y', strtotime($step->created_at)) }}</td>

                                      </div>
                                      <form action="{{ route('steps.destroy', $step->id)}}" method="post">
                                          {{ csrf_field() }}
                                          @method('DELETE')
                                          <button class="btn btn-danger" type="submit">Delete</button>
                                          <hr>
                                        </form>
                                      
                                      @endforeach
                                      
                                    
                                    </div>
                                  </div>
                                </div>
                          </div>
                            </center>
                        </div>

                    </div>
               </div>
          </div>
        </div>
      </div>
    </div>
</body>
</html>

 
    

@endsection
