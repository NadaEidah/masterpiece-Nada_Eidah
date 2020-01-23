@extends('layouts.app')
   
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h1>my Works</h1>
 
  @foreach ($works as $work)
<div class="card text-white bg-warning mb-3" style="max-width: 20rem;">
    <div class="card-header">{{$work->title}}</div>
    <div class="card-body">
    <p class="card-text">{{$work->body}}</p>
    <div class="modal-footer">
    <a href="/work/{{$work->id}}/edit" class="btn btn-secondary">eidt</a>
    

    <a href="/work" class="btn btn-secondary">back</a>
    {!! Form::open(['action' => ['WorkController@destroy',$work->id], 'method'=>'post']) !!}
    {{Form::hidden('_method','DELETE')}}
    {{Form::submit('delete')}}
    {!! Form::close() !!}
    
    <button type="button" class="btn btn-secondary disabled">{{$work->created_at}}</button>
  </div>
</div>
</div>

@endforeach
                </tbody>
   
            </table>
        </div>
    </div>
    
</div>
@endsection