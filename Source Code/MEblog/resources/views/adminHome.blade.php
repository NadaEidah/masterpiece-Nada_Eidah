 
@extends('layouts.app')

@section('content')
<style>
  body{
    background-color: white;
  }
    table {
      font-family: arial, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    td, th {
      border: 1px solid #dddddd;
      text-align: left;
      padding: 8px;
    }
    
    tr:nth-child(even) {
      background-color: #dddddd;
    }
    </style>
<div class="" style="margin-top:20px">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header " style=" background-color:#4CC0E5;">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="container " >
                            <div class="row">
                                <div class="col-sm">
                                    <div class="card text-white bg-info mb-3" style="max-width: 18rem;background-color: #F1A5D5">
                                            <div class="card-header">Users</div>
                                            <div class="card-body">
                                              <h5 class="card-title">{{$users_count}}</h5>
                                             </div>
                                          </div>
                              </div>
                              <div class="col-sm">
                                    <div class="card text-white bg-info  mb-3" style="max-width: 18rem;background-color: #A0B7EE">
                                            <div class="card-header">Useful</div>
                                            <div class="card-body">
                                              <h5 class="card-title">{{$post_count}}</h5>
                                                
                                             </div>
                                          </div>
                              </div>
                           
                                    <div class="col-sm">
                                          <div class="card text-white mb-3 bg-info" style="max-width:18rem; background-color: #8DE976">
                                                  <div class="card-header">Fun</div>
                                                  <div class="card-body">
                                                    <h5 class="card-title">{{$post2_count}}</h5>
                                                   </div>
                                                </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="card text-white bg-info" style="max-width:18rem;">
                                                <div class="card-header">Posts</div>
                                                <div class="card-body">
                                                  <h5 class="card-title">{{$work_count}}</h5>
                                                 </div>
                                              </div>
                                  </div>
                              
                            

                        
                              <div class="container">
                                  <div class="row">
                                  <div class="col-sm">
                                        <div class="card bg-light mb-3" style="max-width: 18rem;">
                                                <div class="card-header">comment Posts</div>
                                                <div class="card-body">
                                                  <h5 class="card-title">{{$comment_count}}</h5>
                                                 </div>
                                              </div>
                                  </div>
                            
                                  <div class="col-sm">
                                        <div class="card  bg-light mb-3" style="max-width: 18rem;">
                                                <div class="card-header">step</div>
                                                <div class="card-body">
                                                  <h5 class="card-title">{{$step_count}}</h5>
                                                 </div>
                                              </div>
                                  </div>
                                      <div class="col-sm">
                                    <div class="card  bg-light mb-3" style="max-width: 18rem;">
                                            <div class="card-header">Categories</div>
                                            <div class="card-body">
                                              <h5 class="card-title">{{$category_count}}</h5>
                                             </div>
                                          </div>
                              </div>
                                  <div class="col-sm">
                                    <div class="card  bg-light mb-3" style="max-width: 18rem;">
                                            <div class="card-header">how user more </div>
                                            <div class="card-body">
                                              <h5 class="card-title">{{$post2_count}}</h5>
                                             </div>
                                          </div>
                              </div>
                            </div>
                          </div>
                       
                          {{-- <td>{{$postss->user_id}}</td> --}}
                             
                              </div>
                </div>
                <hr>
                <h1>User</h1>
                <hr>
                <table class="justify-content-center">
                <tr>
                    <th>Day</th>
                    <th>email</th>
                    <th>name</th> 
                    </tr>
                    
                    @foreach ($users as $user)
                          <tr style="background-color: #90D8D8" >
                              <td>{{$user->created_at}}</td>
                              <td>{{$user->email}}</td>
                              <td>{{$user->name}}</td>
                              @endforeach
                            </tr>
                  </table>
                <br>
                <h1>Useful Challenge</h1>
                <hr>
                <table >
                    <tr>
                  <th>Day</th>
                  <th>title</th>
                  <th>content</th>
                  <th>email</th>
                  <th>name</th>  
                  {{-- <th>no</th> --}}

                    </tr>
                    @foreach ($posts as $post)
                          <tr style="background-color: #A0B7EE">
                              {{-- <td> {{$post->user->id}}</td> --}}
                              <td>{{$post->created_at}}</td>
                              <td>{{$post->title}}</td>
                              <td>{{$post->body}}</td>
                              <td> {{$post->user->email}}</td>
                              <td> {{$post->user->name}}</td>
                              {{-- <td>{{$postsCount}}</td> --}}
                              @endforeach
                            </tr>
                  </table>
                  <br>
                  <h1>Fun Challenge</h1>
                  <hr>
                  <table>
                      <tr>
                      <th>Day</th>
                      <th>title</th>
                      <th>content</th>
                      <th>email</th>
                      <th>name</th>  
                      </tr>
                      @foreach ($post2s as $post2)
                            <tr style="background-color: #8DE976">
                                <td>{{$post2->created_at}}</td>
                                <td>{{$post2->title}}</td>
                                <td>{{$post2->content}}</td>

                              <td> {{$post2->user->email}}</td>
                              <td> {{$post2->user->name}}</td>
                                @endforeach
                              </tr>
                    </table>
                    <br>
                    <h1>Post</h1>
                    <hr>
                    <table>
                        <tr>
                        <th>Day</th>
                        <th>title</th>
                        <th>content</th>
                        <th>email</th>
                        <th>name</th>  
                        {{-- <th>work</th>  --}}
                        </tr>
                        @foreach ($works as $work)
                              <tr style="background-color: #A5D8D8">
                                  <td>{{$work->created_at}}</td>
                                  <td>{{$work->title}}</td>
                                  <td>{{$work->body}}</td>
                                <td> {{$work->user->email}}</td>
                                <td> {{$work->user->name}}</td>
                                {{-- <td>{{$work->work_id}}</td> --}}

                                  @endforeach
                                </tr>
                      </table>
                      <br>
                      <h1>Comment</h1>
                      <hr>
                        <table>
                        <tr>
                        <th>Day</th>
                        <th>work_id</th>
                        {{-- <th>work titile</th>
                        <th>work content</th> --}}
                        <th>content</th>
                        <th>email</th>
                        <th>name</th>  
                        </tr>
                        @foreach ($comments as $comment)
                              <tr style="background-color: #ADA5D8">
                                  <td>{{$comment->created_at}}</td>
                                  <td>{{$comment->work_id}}</td>
                                  <td>{{$comment->body}}</td>
                                  <td>{{$comment->user->email}}</td>
                                  <td>{{$comment->user->name}}</td>
                        @endforeach
                              </tr>
                      </table>

    
            </div>
        </div>
    </div>
</div>
@endsection

       {{-- <table>
                                <tr>
                              <th> id</th>
                              <th> name</th>  
                              <th> email</th>4
                              <th>number of posts</th>
                                </tr>
                              @foreach ($users as $user)
                            
                                
                              
                                      <tr>
                                          <td> {{$user->id}}</td>
                                          <td> {{$user->name}}</td>
                                          <td> {{$user->email}}</td>
                                          @foreach ($posts as $post)
                                          <td>{{$post->title}}</td>
                                          @endforeach
                                        </tr>
                                        @endforeach
                              </table>
                              --}}


                              {{-- {{$company_bookings}} --}}
                                {{-- @foreach ($userPost as $userPost)
                                <td>{{$userPost}}</td> 

                                @endforeach --}}

                              {{-- {{$posts}} --}}
                              {{-- @foreach ($posts as $post)

                             <h1> {{$post->title}} number pf post {{$post}}  Posted by {{$post->user->name}} </h1>
                              @endforeach --}}

                              {{-- @foreach ($posts as $post)

                              <h1>  Posted by {{$post->user->name}} </h1>
                               @endforeach --}}


                              {{-- {{$posts}}
                              {{$users}}  --}}

                              {{-- {{$posts->title}} --}}
                           
                              {{-- {{$post2_win->title}} --}}


                                            {{-- <table>
                      <tr>
                        @foreach ($users as $user)
                        <th> {{$user->id}}</th>
                        @endforeach
               <td>id</td>
                 
                    <th>no</th>
  
                      </tr>
                      @foreach ($posts as $post)
                    
                            <tr>
                                <td>{{$user->id}}</td>
                                
                                <td>{{$postsCount}}</td>
                                
  
                                @endforeach
                              </tr>
                    </table> --}}