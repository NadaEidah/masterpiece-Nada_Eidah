@extends('layouts.app')

@section('content')
           <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">all users</div>
            
                            <div class="card-body">
                                

                                @if ($users->count()>0)
                          
                                <table class="table table-striped">
                                        <thead>
                                       <th></th>
                                       <th>name</th>
                                       <th>role</th>
                                        </thead>
                                        <tbody>
                                            @foreach ($users as $user)
                                            <tr>
                                                    {{-- {{ route('users.admin',$user->id) }} --}}
                                           
                                            <th scope="row">
                                                    {{-- <img src="{{asset($user->profile->avatar)}}"  width="100px" height="100px"> --}}
                                                    <img src="https://cdn.business2community.com/wp-content/uploads/2017/08/blank-profile-picture-973460_640.png" alt="" width="75px" height="75px">
                                            </th>
                                            <th scope="row">{{$user->name}}</th>
                                            <th >
                                                {{-- <a class="" href="/post2/edit/{{$post2->id}}">
                                                    <i class="far fa-edit">e</i>
                                                </a> --}}
                                              @if ($user->admin)
                                              <a href="/users/notadmin/{{$user->id}}"> delete admin</a> 
                                                  admin
                                              @else
                                                not admin  
                                            <a href="/users/admin/{{$user->id}}"> make admin</a> 
                                              @endif
                                            </th>
                                            <th >
                                                {{-- {{route('post2.delete',['id'=>$post2->id])}} --}}
                                                    {{-- <a href="{{route('post2.delete',['id'=>$post2->id])}}">
                                                        <i class="fas fa-trash-alt">d</i>
                                                    </a> --}}
                                                    {{-- {!! Form::open(['action' => ['UserController@destroy',$user->id], 'method'=>'post']) !!}
                                                    {{Form::hidden('_method','DELETE')}}
                                                    {{Form::submit('delete')}}
                                                    {!! Form::close() !!} --}}
                                                </th>
                                            </tr> 
                                            @endforeach
                                       

                                        @else  
                                            <p scope='row' class="text-center">No users</p>
                                        @endif
                                             </tbody>
                                      </table>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
@endsection



