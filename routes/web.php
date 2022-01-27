<?php

use App\Http\Controllers\CampaignController;
use App\Http\Controllers\FeedbackController;
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
  $data = Product::orderBy('name', 'asc')->get();
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
  $category_sub = CategorySubs::where('category_id', $id)->get();
  return response()->json($category_sub);
});

Route::get('menu-products/category/{id}', function ($id) {
  $data = Product::where('category_subs_id', $id)->orderBy('name', 'asc')->get();
  $category = Category::where('id','1')->get();
  $data_category = Product::where('category_subs_id',$id)->first();
  $data_category_increment = intval($data_category->sub_category->id) + 1;
  // $apaaja = DB::table('products')->orderBy('category_subs_id', 'asc')->orderBy('id', 'asc')->get();
  return view('product.all-product', compact('data', 'category', 'data_category', 'data_category_increment'));
});

Route::get('all-products/{id}', function ($id) {
  $data = Product::where('category_id',$id)->get();
  return view('product.all-product', compact('data'));
});

Route::get('/contact', function () {
  return view('contact.index');
});
Route::resource('home', HomeController::class);
Route::resource('order', OrderController::class);
Route::resource('product', ProductController::class);
Route::resource('feedback', FeedbackController::class);

Auth::routes();

Route::group(['middleware' => ['admin']], function () {
  Route::get('/admin', function () {
    return view('admin.index');
  });
  Route::resource('categories', CategoryController::class);
  Route::get('/categories/{id}/edit', 'App\Http\Controllers\CategoryController@edit');
  Route::post('/categories/{id}/update', 'App\Http\Controllers\CategoryController@update');
  Route::resource('categories_subs', CategorySubsController::class);
  Route::get('/categories_subs/{id}/edit', 'App\Http\Controllers\CategorySubsController@edit');
  Route::post('/categories_subs/{id}/update', 'App\Http\Controllers\CategorySubsController@update');
  Route::resource('product', ProductController::class);
  Route::get('/product/{id}/edit', 'App\Http\Controllers\ProductController@edit');
  Route::post('/product/{id}/update', 'App\Http\Controllers\ProductController@update');
  Route::get('/search ', 'App\Http\Controllers\ProductController@search');
  Route::resource('campaign', CampaignController::class);
});

Route::group(['middleware' => ['member']], function () {
  Route::get('/detail-product/{id}', [ProductController::class, 'getDetailProduct']);
});

Route::get('/detail-category/{id}', [CategoryController::class, 'getDetailCategory']);
Route::get('/detail-product/{id}', [ProductController::class, 'getDetailProduct']);
Route::get('/order-product/{id}', [OrderController::class, 'getDataOrder']);
Route::get('/detail-category-new', [ProductController::class, 'getDetailProductVTwo']);


