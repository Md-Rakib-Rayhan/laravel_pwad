<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $cats = Category::all();
        // dd($cats); // for text
        
        // return "asi vai";
        return view('backend.category.index', compact('cats'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('backend.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // return "You get me";
        // dd($request);
        // dd($request->all()); // dd mean Dump and Die
        // return request()->category_name;

        $request->validate([
                                                   // table name - 'categories', field name ='name'
            'category_name'=>'required|min:3|max:50|unique:categories,name'
        ],[ // custom message
            'category_name.required'=>'Please provide category name',
            'category_name.min'=>'Category name must be at least 3 characters',
            'category_name.max'=>'Category name must not be more than 50 characters',
            'category_name.unique'=>'Category name already exists. Please choose another one'
        ]);

        $category = [
            'name'=> $request->category_name
        ] ;
        Category::create($category);
        // Category::insert($category); // another way to insert data (but time not auto update)

        // return redirect('/category');

        // With Session that auto deleted after one request
        return redirect()->route('category.index')->with('success','Category Created Successfully');


    }

    /**
     * Display the specified resource.
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Category $category)
    {
        // return "You are in edit method"; // test
        // dd($category);
        return view('backend.category.edit', compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {
        // dd($request->all(), $category);
        
        $request->validate([
            'category_name'=>'required|min:3|max:50|unique:categories,name'
        ]);

        $data = [
            'name'=> $request->category_name
        ];
        
        $category->update($data);
        return redirect()->route('category.index')->with('success','Updated Successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        // return "You are in destroy method"; // test
        $category->delete();
        return redirect()->route('category.index')->with('success','Deleted Successfully');
    }
}
