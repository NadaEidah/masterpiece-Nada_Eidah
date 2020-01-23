@extends('layouts.app')

@section('content')
           <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header">all tags</div>
            
                            <div class="card-body">
                               

                                @if ($tags->count()>0)
                          
                                <table class="table table-striped">
                                        <thead>
                                          <tr>
                                            <th scope="col">title</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($tags as $tag)
                                            <tr>
                                        
                                        <th>  {{$tag->tag}}</th>
                                                    {{-- {!! Form::open(['action' => ['TagsController@destroy',$tag->id], 'method'=>'post']) !!}
                                                    {{Form::hidden('_method','DELETE')}}
                                                    {{Form::submit('delete')}}
                                                    {!! Form::close() !!}
                                                </th> --}}
                                            </tr> 
                                            @endforeach
                                       

                                        @else  
                                            <p scope='row' class="text-center">No tag</p>
                                        @endif
                                             </tbody>
                                      </table>
                            </div>
                        </div>
                    </div>
                </div>
           </div>
@endsection



