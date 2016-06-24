@extends('master')
@section('content')
<!-- 

    @foreach($tasks as $task)
    <li>{{ $task->id }}</li>

    <h3>{{ $task->title }}</h3>
    <p>{{ $task->description }}</p>
    @endforeach
-->
<div class="col-md-10 col-md-offset-1">

	<div class="panel panel-default panel-table">
		<div class="panel-heading">
			<div class="row">
				<div class="col col-xs-6">
					<h3 class="panel-title">Task List</h3>
				</div>
				<div class="col col-xs-6 text-right">
					<a href="{{ url('/create')}}"><button type="button" class="btn btn-sm btn-primary btn-create">Create New</button></a>
				</div>
			</div>
		</div>
		<div class="panel-body">
			<table class="table table-striped table-bordered table-list">
				<thead>
					<tr>
						
						<th class="hidden-xs">ID</th>
						<th>Title</th>
						<th>Description</th>
						<td align='center'><em class="fa fa-cog"></em></th>
					</tr> 
				</thead>
				<tbody>
					@foreach($tasks as $task)
					<tr>
						
						<td class="hidden-xs" align='center'>{{ $task->id }}</td>
						<td><a href="{{ url('/tasks', $task->id) }}">{{ $task->title }}</a></td>
						<td>{{ $task->description }}</td>
						<td align="center">
							<a href="{{ url('tasks', $task->id) }}" class="btn btn-primary"><em class="fa fa-bars"></em></a>
							<a href="{{ url('/edit', $task->id) }}" class="btn btn-default"><em class="fa fa-pencil"></em></a>
							<a href="{{ url('/delete', $task->id) }}" class="btn btn-danger"><em class="fa fa-trash"></em></a>
						</td>
					</tr>
					@endforeach
				</tbody>
			</table>

		</div>
		<div class="panel-footer">
			<div class="row">
				<div class="col col-xs-4">Page 1 of 5
				</div>
				<div class="col col-xs-8">
					<ul class="pagination hidden-xs pull-right">
						<li><a href="#">1</a></li>
						<li><a href="#">2</a></li>
						<li><a href="#">3</a></li>
						<li><a href="#">4</a></li>
						<li><a href="#">5</a></li>
					</ul>
					<ul class="pagination visible-xs pull-right">
						<li><a href="#">«</a></li>
						<li><a href="#">»</a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection