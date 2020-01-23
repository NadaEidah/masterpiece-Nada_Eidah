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

          {{-- <div class="card-header">edit post2 {{$post2->name}}</div> --}}

              <div class="ss">
                  {!! Form::open(['action' => ['Posts2Controller@update',$post2->id], 'method'=>'post']) !!}            
        <div class="container"> 
                    <div class="panel-heading">
                            <h3 class="panel-title">Eidt the Fun challenge</h3> 
                    </div>
                          
    <div class="form-group">
          {{Form::label('title', 'Title')}}
          {{Form::text('title',$post2->title)}}
    </div>
    <div class="form-group">
            {{Form::label('content', 'content')}}
            {{Form::text('content',$post2->content)}}
      </div>
      <div class="form-group">
            {{Form::label('category_id', 'category_id')}}
            {{Form::text('category_id',$post2->name)}}
      </div>
    <div class="form-group">
            {{Form::label('featrued', 'featrued')}}
            {{Form::file('featrued')}}
      </div>
      {{Form::submit('Click Me!')}}
      {{Form::hidden('_method','put')}}
    </div>
</div>
</div>
   {!! Form::close() !!}
 
              </div>
          </div>
      </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="js/animate.js"></script>
  <script src="js/custom.js"></script>
</body>
</html>  
@endsection


          {{-- <form method="put" action="{{ route('post2.update',$post2->id) }}" enctype="multipart/form-data">
                          <div class="form-group">
                                  @csrf
                            <label for="title">title</label>
                            <input type="text" class="form-control" name="title" value="{{$post2->title}}">
                          </div>
                          <div class="form-group">
                                  <label for="">category select</label>
                                  <select class="form-control" name="category_id" id="category">
                                    @foreach ($category as $category)
                                  <option value="{{$category->id}}">{{$category->title}}</option>
                                    @endforeach
                                     
                                  </select>
                                </div>

                          <div class="form-group">
                                  <label for="content">content</label>
                                  <textarea type="text" class="form-control" name="content" value="{{$post2->content}}" rows="8" cols="8"></textarea>
                          </div>

                                      <div class="form-group">
                                        <label for="featrued">photo file input</label>
                                        <input type="file" class="form-control-file" name="featrued">
                                      </div>
                                      <div class="form-group">
                                      <input type="submit" class="btn btn-success" />
                                        update
                                      </div>
                  </form> --}}


