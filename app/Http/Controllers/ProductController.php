<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Category;
use App\Models\CategorySubs;
use RealRashid\SweetAlert\Facades\Alert;


class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::all();
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::all();
        $category_subs = CategorySubs::all();
        return view('product.create', compact('categories', 'category_subs'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreProductRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreProductRequest $request)
    {
          $request->validate([
            'images' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $file_name = $request->images->getClientOriginalName();
        $image = $request->images->move('img', $file_name);
        
         Product::create([
            'category_id' => $request->category_id,
            'category_subs_id' => $request->category_sub_id,
            'name' => $request->name,
            'images' => $image,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'description' => $request->description,
            'status' => $request->status,
        ]);
        Alert::success('Success', 'Data Product sudah di tambahkan');

    return redirect()->route('product.index');
        // dd($a);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateProductRequest  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateProductRequest $request, Product $product)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();
        Alert::success('Success', 'Data Product sudah di hapus');
        return back();
    }

    // controller detail product
    public function getDetailProduct ($id)
    {
        $product = Product::where('id', $id)->first();
        $category = Category::where('id', $product->category_id)->first();
        $subCategory = CategorySubs::where('id', $product->category_subs_id)->first();
        
        $data = [
            'category' => $category,
            'subCategory' => $subCategory,
            'product' => $product,
        ];

        return view('testProduct', $data);
    }
}
