@extends('layouts.app')
   
@section('content')
<a href="{{ route('steps.create') }}" class="btn btn-success mb-2">Add</a> 
  <br>
   <div class="row">
        <div class="col-12">
          
          <table class="table table-bordered" id="laravel_crud">
           <thead>
              <tr>
                 <th>Id</th>
                 <th>Step</th>
              
                 <td colspan="4">Action</td>
              </tr>
           </thead>
           <tbody>
              @foreach($steps as $step)
              <tr>
                 <td>{{ $step->id }}</td>
                 <td>{{ $step->step }}</td>
                 
                 <td>{{ date('Y-m-d', strtotime($step->created_at)) }}</td>
                 <td><a href="{{ route('steps.edit',$step->id)}}" class="btn btn-primary">Edit</a></td>
                 <td>
                 <form action="{{ route('steps.destroy', $step->id)}}" method="post">
                  {{ csrf_field() }}
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                </td>
              </tr>
              @endforeach
           </tbody>
          </table>
          {!! $steps->links() !!}
       </div> 
   </div>
 @endsection  