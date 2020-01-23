@extends('layouts.app')

@section('content')
           <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">all categeey</div>
            
                            <div class="card-body">
                                You are logged categeey........!


                                <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th scope="col">no</th>
                                            <th scope="col">edit</th>
                                            <th scope="col">delet</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($category as $category)
                                            <tr>
                                            <th scope="row">{{$category->name}}</th>
                                            <th >
                                                <a class="" href="/category/{{$category->id}}/edit">
                                                    <i class="far fa-edit">e</i>
                                                </a>
                                            </th>
                                            <th >
                                                    <a href="/category/delete/{{$category->id}}">
                                                        <i class="fas fa-trash-alt">d</i>
                                                    </a>
                                                    {{-- {!! Form::open(['action' => ['CategoryController@destroy',$category->id], 'method'=>'post']) !!}
                                                    {{Form::hidden('_method','DELETE')}}
                                                    {{Form::submit('delete')}}
                                                    {!! Form::close() !!} --}}
                                                </th>
                                            </tr> 
                                            @endforeach
                                        </tbody>
                                      </table>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
@endsection



