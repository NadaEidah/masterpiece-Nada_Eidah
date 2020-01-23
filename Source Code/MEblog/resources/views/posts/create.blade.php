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
           
               <title>creat challenge</title>
               <style>
               .jumbotron {width: 100%;height: 250px;}
                   .jumbotron h2 {padding-bottom: 0;}


                   body{
                       background: ;


    /* background: -webkit-linear-gradient(left, #0072ff, #00c6ff); */
}
.contact-form{
    background: #EDEEEE;
    margin-top: 5%;
    margin-bottom: 5%;
    width: 70%;
    border: 2px solid #A5A3A5;
}
.contact-form .form-control{
    border-radius:1rem;
}
.contact-image{
    text-align: center;
}
.contact-image img{
    border-radius: 6rem;
    width: 11%;
    margin-top: -3%;
    /* transform: rotate(29deg); */
}
.contact-form form{
    padding: 14%;
}
.contact-form form .row{
    margin-bottom: -7%;
}
.contact-form h3{
    margin-bottom: 15%;
    margin-top: 10%;
    text-align: center;
    /* color: #0062cc; */
}
.contact-form .btnContact {
    width: 50%;
    border: none;
    border-radius: 1rem;
    padding: 1.5%;
    background: #dc3545;
    font-weight: 600;
    color: #fff;
    cursor: pointer;
}
.btnContactSubmit
{
    /* width: 50%; */
    border-radius: 1rem;
    padding: 1.5%;
    color: #fff;
    background-color: #0062cc;
    border: none;
    cursor: pointer;
}

.col-md-3{
		background: #75a3a3;
		padding: 4%;
		border-top-left-radius: 0.5rem;
        margin-bottom: 5.9%;
		/* border-bottom-left-radius: 0.5rem; */
	}
	/* .contact-info{
		margin-top:10%;
	}
	.contact-info img{
		margin-bottom: 15%;
	}
	.contact-info h2{
		margin-bottom: 10%;
	} */
               </style>
           </head>
           
           <body>
               
            {{-- <div class="container contact">  --}}
               <!--Section-1-->
               {{-- <section class="section-1">
                   <div class="jumbotron d-flex align-items-center" style="background-color:#AFE5AB ">
                       <div class="gradient"></div>
                       <div class="container-fluid content">
                           <h1 data-aos="fade-right" data-aos-delay="300">Welcome to Create Post Useful</h1>
                           <div class="container"> 
                                <h3>Be Redey to starte challenges</h3> 
                          <div class="row" data-aos="fade-up" data-aos-delay="300"> 
                              <div class="col-md-8 text-left"> 
                                 <p>be shore you can do it , maube you will next winre from this life</p>
                             </div>
                         </div>
                         <div class="col-sm-4  text-left">
                                <div class="social-icons">
                                    <a href="#"><i class="fa fa-facebook-official" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                    <a href="#"><i class="fa fa-youtube" aria-hidden="true"></i></a>
                                </div>
                            </div>
                           </div>
                       </div>
                       <!--container-fluid end-->
                   </div>
               </section> --}}
               <div class="container contact-form">
                <div class="contact-image">
                    <img src="data:image/jpeg;base64,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" alt="rocket_contact"/>
                </div>      
           <!-- Contact section Start -->
         <div class="row">
            <div class="col-md-3">
                <div class="contact-info">
                    <img src="https://image.ibb.co/kUASdV/contact-image.png" alt="image"/>
                    <h3>Be Ready to start challenge</h3> 
                    <p> be Sure you can do it , maybe you will next millionaire from this life</p>
                </div>
            </div>
           <section class="blog">
           <div id="contact"> 
          
               {{-- <div class="container">
                    <div class="row justify-content-center"> --}}
                        <div class="col-md-9">
                            <div class=" form-group">
                                <div class="" style="margin-top: 50px;"><h3>Add Your Challenge Useful</h3></div>
                                   <div class="">
                   {!! Form::open(['action' => 'PostsController@store', 'method'=>'post']) !!}
                   <div class="container">
                        
                           <div class="panel panel-warning">  
                                   <div class="panel-heading">
                                           {{-- <h3 class="panel-title"> Create Post</h3>  --}}
                                   </div>
                                           <div class="panel-body"> 
                                           </div>
                                           
                   <div class="form-group">
                         {{Form::label('title', 'Title')}}
                         {{Form::text('title')}}
                         {{ $errors->first('title') }}
                         
                   </div>
                     <div class="form-group">
                            {{Form::label('tools', 'Tools')}}
                            {{Form::text('tools')}}
                      </div>
                     <div class="form-group">
                           {{Form::label('time', 'Time')}}
                           {{Form::text('time')}}
                          
                     </div>

                   <div class="form-group">
                        <label for="category">Category </label>
                        <select  name="category_id" id="category">
                          @foreach ($category as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                          @endforeach
                           
                        </select>
                    
             </div>
                   <div class="form-group">
                           {{Form::label('body', 'Dectatipn')}}
                           {{Form::textarea('body')}}
                   </div>
           
                   {{-- <div class="form-group">
                           {{Form::label('body', 'stpes')}}
                           {{Form::textarea('body')}}
                   </div> --}}
                   <div class="">
                        {{Form::submit('Add')}}
                    </div>
                   </div>
               </div>
           </div>
                            </div></div></div></div></div></section>
                  {!! Form::close() !!}
                 <div class="row" data-aos="fade-up" data-aos-delay="300">
                     {{-- <div class="col-md-12">
                         <form>
                             <div class="form-group row">
                                 <div class="col-sm-6">
                                     <input type="text" class="form-control" placeholder="Your Name" required>
                                 </div>
                                     <div class="col-sm-6">
                                     <input type="text" class="form-control" placeholder="Your Email" required>
                                 </div>
                                 <div class="col-sm-12">
                                     <input type="number" class="form-control" placeholder="Your Phont Number" required>
                                 </div>
                             </div>
                             <div class="form-group row">
                                 <div class="col-xs-12 col-md-12">
                                     <textarea type="text" class="form-control" placeholder="Your Message" rows="6" required></textarea>
                                 </div>
                             </div>
                             <button type="submit" class="btn btn-primary">Alright Submit it</button>
                         </form>
                     </div>
                 </div>--}}
                </div> 
           </div>
        </div>
           </section>
       
           <!-- Contact section Ended -->
      
                   <!-- Footer -->
             
        
           
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



