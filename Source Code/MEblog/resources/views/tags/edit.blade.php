@extends('layouts.app')

@section('content')
           <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                        <div class="card-header">edit post2 {{$post2->name}}</div>
            
                            <div class="card-body">
                                {{-- {!! Form::open(['action' => ['Posts2Controller@update',$post2->id], 'method'=>'post']) !!} --}}
                                <form method="put" action="{{ route('post2.update',$post2->id) }}" enctype="multipart/form-data">
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
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
@endsection



