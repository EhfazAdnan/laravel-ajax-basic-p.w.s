<?php

namespace App\Http\Controllers;

use App\Todo;
use Illuminate\Http\Request;

class TodoController extends Controller
{
    public function index(){
        $tasks = Todo::all();
        return view('todo.index', compact('tasks'));
    }

    public function create(){
        return view('todo.add');
    }

    public function save(Request $request){
       $task = Todo::create($request->all());
       $tasks = Todo::all();
       return view('todo.index', compact('tasks'));
    }

    public function edit($id){

    }

    public function update(Request $request){

    }

    public function destroy($id){

    }
}
