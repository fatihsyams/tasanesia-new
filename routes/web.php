<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategorySubsController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProductController;
use App\Models\CategorySubs;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('home', HomeController::class);
Route::resource('order', OrderController::class);

Route::get('getCourse/{id}', function ($id) {
  $category_sub = CategorySubs::where('category_id',$id)->get();
  return response()->json($category_sub);
});
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

});

Route::get('/detail-category/{id}', [CategoryController::class, 'getDetailCategory']);
Route::get('/detail-product/{id}', [ProductController::class, 'getDetailProduct']);
Route::get('/order-product/{id}', [OrderController::class, 'getDataOrder']);

