<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Task;

class TasksController extends Controller

{
	public function index()
	{
		$tasks = Task::all();

		return view('tasks.index', compact('tasks'));
	}
	public function create()
	{

		return view('tasks.create');
	}
	public function store(Request $Request)
	{
		$this->validate($Request,[
			'title'=>'required',
			'description'=>'required'
			]);

		$input = $Request->all();
		Task::create($input);

		return redirect('tasks');
	}
	public function show($id)
	{
	
		$task = Task::FindorFail($id);
		return view('tasks.show', compact('task'));
	}

	public function edit(Task $id)
	{
		//$task = Task::findOrFail($id);
	
		return view('tasks.edit', compact('id'));
	}
	public function update(Request $request, Task $id)
	{
		
		//$task = Task::findOrFail($id);
	
		$id->update($request->all());
		//$task->fill($input)->save();
		return back();

	}
}