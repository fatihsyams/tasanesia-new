<?php

namespace App\Http\Controllers;

use App\Models\CategorySubs;
use App\Http\Requests\StoreCategorySubsRequest;
use App\Http\Requests\UpdateCategorySubsRequest;
use App\Models\Category;

class CategorySubsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $category_subs = CategorySubs::all();
        return view('categories_subs.index', compact('category_subs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        return view('categories_subs.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreCategorySubsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreCategorySubsRequest $request)
    {
    CategorySubs::query()->create([
      'category_id' => $request->category_id,
      'name'  => $request->name,
      'images'  => $request->images,
      'description'  => $request->description
    ]);

    return redirect()->route('categories_subs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CategorySubs  $categorySubs
     * @return \Illuminate\Http\Response
     */
    public function show(CategorySubs $categorySubs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CategorySubs  $categorySubs
     * @return \Illuminate\Http\Response
     */
    public function edit(CategorySubs $categorySubs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateCategorySubsRequest  $request
     * @param  \App\Models\CategorySubs  $categorySubs
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateCategorySubsRequest $request, CategorySubs $categorySubs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CategorySubs  $categorySubs
     * @return \Illuminate\Http\Response
     */
    public function destroy(CategorySubs $categorySubs)
    {
        //
    }
}
