<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\category;
use function PHPUnit\Framework\containsIdentical;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = category::all();
        return view('categories.index', compact('categories'));
    }

    public function create()
    {
        return view('categories.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5'
        ]);
        Category::create([
            'title' => $request->title
        ]);
        return redirect()->route('category.index');
    }

    public function edit(category $category)
    {
        return view('categories.edit', compact('category'));
    }

    public function destroy(category $category)
    {
        $category->delete();
        return redirect()->route('category.index');
    }
    public function update(category $category ,Request $request)
    {
        $request->validate([
            'title' => 'required|min:5'
        ]);
        $category->update([
            'title' => $request->title
        ]);
        return redirect()->route('category.index');
    }
}
