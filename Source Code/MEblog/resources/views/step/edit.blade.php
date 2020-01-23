@extends('step.layout')
 
@section('content')
<h2 style="margin-top: 12px;" class="text-center">Edit step</a></h2>
<br>
 
<form action="{{ route('steps.update', $step_info->id) }}" method="POST" name="update_step">
{{ csrf_field() }}
@method('PATCH')
 
<div class="row">
    <div class="col-md-12">
        <div class="form-group">
            <strong>step</strong>
            <input type="text" name="step" class="form-control" placeholder="Enter step" value="{{ $step_info->title }}">
            <span class="text-danger">{{ $errors->first('title') }}</span>
        </div>
    </div>

    <div class="col-md-12">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>
 
</form>
@endsection