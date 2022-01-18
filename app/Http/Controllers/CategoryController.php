<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\StoreCategoryRequest;
use App\Http\Requests\UpdateCategoryRequest;
use App\Models\CategorySubs;
use App\Models\Product;
use RealRashid\SweetAlert\Facades\Alert;


class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::all();
        return view('categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategoryRequest $request)
    {

        $request->validate([
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file_name = $request->images->getClientOriginalName();
        $image = $request->images->move('img', $file_name);

        
        Category::create([
            'name' => $request->name,
            'images' => $image,
            'description' => $request->description,
        ]);
        Alert::success('Success', 'Data Category sudah di tambahkan');

        return redirect()->route('categories.index');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = Category::find($id);
        return view('categories.edit', ['data' => $data]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategoryRequest  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategoryRequest $request, $id)
    {
        $categories = Category::find($id);

        if ($request->hasFile('images')) {
            $file_name = $request->images->getClientOriginalName();
            $image = $request->images->move('img', $file_name);
            
            $categories->name = $request->input('name');
            $categories->description = $request->input('description');
            $categories->images = $image;
        } else {
            $categories->name = $request->input('name');
            $categories->description = $request->input('description');    
        }

        $categories->save();

        Alert::success('Success', 'Data Category berhasil diperbaharui');
        return redirect()->route('categories.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        //
    }

    // controller detail category
    public function getDetailCategory ($id)
    {
        $category = Category::where('id', $id)->first();
        $subCategory = CategorySubs::where('category_id', $category->id)->get();
        
        $data = [
            'category' => $category,
            'sub_category' => $subCategory,
        ];

        return view('test', $data);

    }
}
