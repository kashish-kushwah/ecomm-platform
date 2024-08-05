<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::all();
        return view('admin.product.index', ['product' => $product]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       $data = $request->validate([
            'title' => 'required',
            'category_id' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'required|image', 
        ]);
        // dd($data);
        if($request->hasFile('image')){
            
            $filename = uniqid().time().str_replace(" ","_", $request->file('image')->getClientOriginalName());
            
            $path = public_path().'/images/products/';
            $request->file('image')->move($path, $filename);
            $data['image'] = $filename;
        }
        $product=new Product();
        $product->title=$data['title'];
        $product->category_id=$data['category_id'];
        $product->description=$data['description'];
        $product->price=$data['price'];
        $product->image=$data['image'];
        $product->status=1;
        $product->save();
        return redirect()->route('admin.product.index')
                         ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        $product = Product::findOrFail($product->Id);
        return view('admin.product.show', ['product' => $product]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('admin.product.edit', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        $data = $request->validate([
            'title' => 'required',
            'description' => 'required',
            'price' => 'required',
            'image' => 'nullable|image|mime_types:image/*',
            'status' => 'required'
        ]);



        if($request->hasFile('image')){
            
            $filename = uniqid().time().str_replace(" ","_", $request->file('image')->getClientOriginalName());
            
            $path = public_path().'/images/products/';
            $request->file('image')->move($path, $filename);
            $data['image'] = $filename;
        }
        $product->title=$data['title'];
        $product->description=$data['description'];
        $product->price=$data['price'];
        $product->image=$data['image'];
        $product->status=$data['status'];
        $product->save();
        return redirect()->route('admin.product.index')->with('success', 'Product updated');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('admin.product.index')
                         ->with('success', 'Product deleted successfully.');
    }
    }

