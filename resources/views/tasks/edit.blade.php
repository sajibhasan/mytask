@extends('master')

@section('content')



<div class="col-md-6">
	<h1>Edit Task</h1>
	
	<hr>

	@if($errors->any())
    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif


	{!! Form::open(['url' => 'tasks/update/{{$id->id}}' ]) !!}

	{{ method_field('PATCH') }}


	<div class="form-group">
		{!! Form::label('title', 'Title :',['class' => 'control-label']) !!}
		{!! Form:: text('title', $id->title, ['class'=> 'form-control'])!!}
	</div>
	<div class="form-group">
		{!! Form::label('description', 'Description :',['class' => 'control-label']) !!}
		{!! Form:: textarea('description', $id->description, ['class'=> 'form-control']) !!}
	</div>
	{!! Form::submit('Update task', ['class'=>'btn btn-primary']) !!}




	{!! Form::close() !!}
</div>
@endsection