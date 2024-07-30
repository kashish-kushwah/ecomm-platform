<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $items = Category::all();
        return view('admin.category.index',['items' => $items]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
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
        return redirect()->route('admin.category.index')->with('success', 'Categor created');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
