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
            // dd($cats);

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
        //  Validation
        $request->validate(
            [
                'cat_name'=> 'required|max:10|min:3|unique:categories,name'
            ],
            [
                'required'=> 'Category name is required',
                'max' => 'Category name must be 3 to 10 letter',
                'min' => 'Category name must be 3 to 10 letter',
                'unique' => 'Category name is already taken'

            ]
        );


        // Data......
        $category =[
            'name'=>$request->cat_name
        ];
        Category::create($category);
        return redirect()->route('category.index')->with('success', 'Category added');
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
        return view('backend.category.edit',compact('category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Category $category)
    {

          $request->validate(
            [
                'cat_name'=> 'required|max:10|min:3|unique:categories,name'
            ],
            [
                'required'=> 'Category name is required',
                'max' => 'Category name must be 3 to 10 letter',
                'min' => 'Category name must be 3 to 10 letter',
                'unique' => 'Category name is already taken'

            ]
        );
        //dd($request);
        $data=[
            'name'=>$request->cat_name
        ];
        $category->update($data);
        return redirect()->route('category.index')->with('success','Successfully Updeted');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Category $category)
    {
        // dd($category);
        $category->delete();
        return redirect()->route('category.index')->with('success','Successfully Deleted');
    }
}
