<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $items = Category::all();
        return view('admin.category.index',['items' => $items]);
    }

    public function create()
    {
        return view('admin.category.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'title' =>'required',
            'image' => 'nullable|image|mime_types:image/*'
        ]);

        $data['status'] = 1;

        if($request->hasFile('image')){
            $filename = uniqid().time().str_replace(" ","_", $request->file('image')->getClientOriginalName());
            $path = public_path().'/images/categories/';
            $request->file('image')->move($path, $filename);
            $data['image'] = $filename;
        }

        Category::create($data);
        return redirect()->route('admin.category.index')->with('success', 'Category created');
    }

    public function edit(Category $category)
    {
        return view('admin.category.edit', compact('category'));
    }

    public function update(Request $request, Category $category)
    {
        $data = $request->validate([
            'title' =>'required',
            'image' => 'nullable|image|mime_types:image/*',
            'status' => 'required|boolean'
        ]);

        $data['status'] = 1;

        if($request->hasFile('image')){
            
            $filename = uniqid().time().str_replace(" ","_", $request->file('image')->getClientOriginalName());
            
            $path = public_path().'/images/categories/';
            $request->file('image')->move($path, $filename);
            $data['image'] = $filename;
        }

        $category->update($data);
        return redirect()->route('admin.category.index')->with('success', 'Category updated');
    }

    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('admin.category.index')->with('success', 'Category deleted successfully.');
    }
}
