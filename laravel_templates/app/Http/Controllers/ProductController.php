<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\product;
use Illuminate\Http\Request;
use Symfony\Contracts\Service\Attribute\Required;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = product::all();
        return view('backend.product.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $data = Category::all();
        return view('backend.product.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
         //  Validation
        $request->validate(
            [
                'prod_name'=> 'required|max:10|min:3',
                'price' => 'required',
                'stock' => 'required',
                'category' => 'required',
                'sku' => 'required',
                'image' => 'required|image|mimes:jpeg,png,jpj,pdf|max:2048',

            ],
            // [
            //     'required'=> 'Product name is required',
            //     'max' => 'Product name must be 3 to 10 letter',
            //     'min' => 'Product name must be 3 to 10 letter',
                

            // ]
        );

        $product_img = '';
        if($request->image==null){
            $product_img='product_image/noimage.jpg';
        }
        else{
            $product_img=request()->image->move('product_image',
            $request->image->getClientoriginalName());
        }
        // dd($product_img);

        // Data......
        $data =[
            'categories_id'=>$request->category,
            'name'=>$request->prod_name,
            'description'=>$request->description,
            'sku'=>$request->sku,
            'stock'=>$request->	stock,
            'price'=>$request->price,
            'image'=>$product_img              //$request->image
        ];
        product::create($data);
        return redirect()->route('product.index')->with('success', 'Product added');
    }

    /**
     * Display the specified resource.
     */
    public function show(product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(product $product)
    {
        //  dd($product->image);
         $imagePath=public_path($product->image);
         unlink($imagePath);
        $product->delete();
        return redirect()->route('product.index')->with('success','Successfully Deleted');
    }
}
