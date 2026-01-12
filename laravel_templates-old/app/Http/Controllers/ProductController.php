<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all(); // Retrieve all products from the database
        return view("backend.product.index", compact('products')); // Pass products to the view
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Category::all();
        return view("backend.product.create", compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         $request->validate([
            'product_name'=>'required|min:3|max:50',
            'sku'=>'required|unique:products,sku',
            'stock'=>'required|integer|min:0|max:6999',
            'price'=>'required|numeric',
            'category_id' => 'required',
            'image_url' => 'mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // dd($request->image_url);

        $product_image = '';
        if($request->image_url==null){
            $product_image = 'dist/img/product_photo/No_Image_Available.jpg';
        }else{
            // $product_image = $request->file('image_url')->store('products','public');
            $product_image = request()->image_url->move('dist/img/product_photo', $request->image_url->getClientOriginalName());
        } //originalName

        $data = [
            'name'=> $request->product_name,
            'description'=> $request->product_description,
            'sku'=> $request->sku,
            'stock'=> $request->stock,
            'price'=> $request->price,
            'category_id'=> $request->category_id,
            'image_url'=> $product_image
        ] ;
        Product::create($data);

        return redirect()->route('product.index')->with('success','Product Added Successfully');

    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product_image_path = public_path($product->image_url);

        if (File::exists($product_image_path) && $product->image_url != 'dist/img/product_photo/No_Image_Available.jpg') {
            unlink($product_image_path);
            // File::delete($product_image_path); //same
        }

        $product->delete();
        return redirect()->route('product.index')->with('success','Deleted Successfully');
    }
}
