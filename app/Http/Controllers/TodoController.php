<?php

namespace App\Http\Controllers;

use App\Models\category;
use Illuminate\Http\Request;
use App\Models\todo;
use Illuminate\Support\Facades\Storage;

class TodoController extends Controller
{
    public function index()
    {
        $todos = todo::paginate(3);
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
        Storage::delete('/images/'.$todo->image);
        return redirect()->route('todo.index');
    }
    public function show(todo $todo)
    {
        return view('todo.show', compact('todo'));
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
    public function complete(todo $todo)
    {
        $todo->update([
            'status' => 1
        ]);
        return redirect()->route('todo.index',['page' => $_GET['page']]);
    }
    public function doing(todo $todo)
    {
        $todo->update([
            'status' => 0
        ]);
        return redirect()->route('todo.index',['page' => $_GET['page']]);
    }
    public function edit(todo $todo)
    {
        $categories = category::all();
        return view('todo.edit',compact('todo','categories'));
    }
    public function update(todo $todo, Request $request)
    {
        $request->validate([
            'image' => 'nullable|max:2000|image',
            'title' => 'required|min:5',
            'description' => 'required|min:5',
            'category_id' => 'required|integer'
        ]);
        if ($request->hasFile('image')){
            Storage::delete('/images/'.$todo->image);
            $filname = time().'_'.$request->image->getClientOriginalName();
            $request->image->storeAs('\images',$filname);
        }
        $todo->update([
            'image' => $request->hasFile('image') ? $filname : $todo->image,
            'title' => $request->title,
            'description' => $request->description,
            'status' => $request->status,
            'category_id' => $request->category_id
        ]);
        return redirect()->route('todo.index');
    }
}
