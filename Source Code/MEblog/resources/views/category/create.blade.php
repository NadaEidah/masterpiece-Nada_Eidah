@extends('layouts.app')

@section('content')
           <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">create categeey</div>
            
                            <div class="card-body">
                                You are logged categeey........!

                                @if(count($errors)>0)  
                                <ul class="navbar-nav mr-auto">
                                @foreach ($errors->all() as $error)
                                        <li class="nav-item active"> {{$error}}</li>
                                @endforeach  
                                </ul>     
                                @endif                        
                                <form method="post" action="{{ route('category.store') }}" enctype="multipart/form-data">
                                        
                                
                                        <div class="form-group">
                                                @csrf
                                          <label for="name">name</label>
                                          <input type="text" class="form-control" name="name" placeholder="name">
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



