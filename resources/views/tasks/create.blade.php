@extends('master')

@section('content')



<div class="col-md-6">
	<h1>Add a New Task</h1>
	<p>Add to your list task below.</p>
	<hr>

	@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif


	{!! Form::open(['url' => 'save']) !!}


	<div class="form-group">
		{!! Form::label('title', 'Title :',['class' => 'control-label']) !!}
		{!! Form:: text('title', null, ['class'=> 'form-control'])!!}
	</div>
	<div class="form-group">
		{!! Form::label('description', 'Description :',['class' => 'control-label']) !!}
		{!! Form:: textarea('description', null, ['class'=> 'form-control']) !!}
	</div>
	{!! Form::submit('create new task', ['class'=>'btn btn-primary']) !!}




	{!! Form::close() !!}
</div>
@endsection