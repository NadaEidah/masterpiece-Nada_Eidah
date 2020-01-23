@extends('layouts.app')

@section('content')
           <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                        <div class="card-header">edit categeey{{$category->name}}</div>
            
                            <div class="card-body">
                       
                                    
                                <form method="post" action="/category/update/{{$category->id}}" >
                                
                                <div class="form-group">
                                                @csrf
                                          <label for="name">name</label>
                                          <input type="text" class="form-control" name="name" value="{{$category->name}}">
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



