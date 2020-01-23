@extends('layouts.app')

@section('content')
           <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">edit settings</div>
            
                            <div class="card-body">
                              
                                @if(count($errors)>0)  
                              
                                <ul class="navbar-nav mr-auto">
                                        @foreach ($errors->all() as $error)
                                        <li class="nav-item active"> {{$error}}</li>
                                        @endforeach  
                                </ul>     
                                @endif                        
                                <form method="put" action="{{ route('settings.update') }}">
                                        @csrf
                                
                                        <div class="form-group">
                                          <label for="blog_name">blog name</label>
                                          <input type="text" class="form-control" name="blog_name" value="{{$settings->blog_name}}">
                                        </div>
                                        <div class="form-group">
                                                <label for="phone_number">phone number</label>
                                                <input type="text" class="form-control" name="phone_number" value="{{$settings->phone_number}}">
                                              </div>
                                        <div class="form-group">
                                          <label for="blog_email">email</label>
                                          <input type="text" class="form-control" name="blog_email" value="{{$settings->blog_email}}">
                                        </div>

                                        <div class="form-group">
                                            <label for="address">address</label>
                                            <input type="text" class="form-control" name="address" value="{{$settings->address}}">
                                        </div>

                                        
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-success" />
                                        </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
@endsection



