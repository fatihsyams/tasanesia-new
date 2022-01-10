<?php

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategorySubsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Models\CategorySubs;
use App\Models\Category;
use App\Models\Product;
use App\Models\Campaign;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', function() {
  $category = Category::all();
  $data = Product::all();
  $campaign = Campaign::all();
  return view('home.index', compact('category', 'data', 'campaign'));
});

Route::get('/menu-products', function() {
  $category = Category::all();
  return view('product.menu', compact('category'));
});

Route::get('/menu-campaign', function() {
  $data = Campaign::all();
  return view('campaign.menu', compact('data'));
});

Route::get('/about-us', function() {
  return view('about-us.index');
});

Route::get('detail-campaign/{id}', function ($id) {
  $data = Campaign::where('id', $id)->first();
  return view('campaign.detail-menu', compact('data'));
});

Route::get('getCourse/{id}', function ($id) {
  $category_sub = CategorySubs::where('category_id',$id)->get();
  return response()->json($category_sub);
});

Route::get('menu-products/category/{id}', function ($id) {
  $data = Product::where('category_subs_id',$id)->get();
  $category = Category::where('id','1')->get();
  return view('product.all-product', compact('data', 'category'));
});

Route::get('all-products/{id}', function ($id) {
  $data = Product::where('category_id',$id)->get();
  return view('product.all-product', compact('data'));
});

Route::get('/contact', function () {
  return view('contact.index');
});
Route::resource('campaign', CampaignController::class);
Route::resource('home', HomeController::class);
Route::resource('order', OrderController::class);
Route::resource('product', ProductController::class);

Auth::routes();

Route::group(['middleware' => ['admin']], function () {
  Route::get('/admin', function () {
    return view('admin.index');
  });
  Route::resource('categories', CategoryController::class);
  Route::resource('categories_subs', CategorySubsController::class);
  Route::resource('product', ProductController::class);
});

Route::group(['middleware' => ['member']], function () {
  // Route::get('/detail-product/{id}', [ProductController::class, 'getDetailProduct']);
});

Route::get('/detail-category/{id}', [CategoryController::class, 'getDetailCategory']);
Route::get('/detail-product/{id}', [ProductController::class, 'getDetailProduct']);
Route::get('/order-product/{id}', [OrderController::class, 'getDataOrder']);
Route::get('/detail-category-new', [ProductController::class, 'getDetailProductVTwo']);


