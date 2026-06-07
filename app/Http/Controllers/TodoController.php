<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Models\todo;

class TodoController extends Controller
{
    public function index()
    {
        $todos = todo::all();
        return view('todo.index', compact('todos'));
    }
    public function create()
    {
        $categories = category::all();
        return view('todo.create',compact('categories'));
    }
    public function destroy(todo $todo)
    {
        $todo->delete();
        return route('todo.index');
    }
    public function store(Request $request)
    {
        $request->validate([
            'image' => 'required|max:2000|image',
            'title' => 'required|min:5',
            'description' => 'required|min:5',
            'category_id' => 'required|integer'
        ]);
        $filname = time().'_'.$request->image->getClientOriginalName();
        $request->image->storeAs('\images',$filname);

        Todo::create([
            'image' => $filname,
            'title' => $request->title,
            'description' => $request->description,
            'category_id' => $request->category_id
        ]);
        return redirect()->route('todo.index');
    }
}
