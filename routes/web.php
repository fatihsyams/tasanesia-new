<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CategorySubsController;
use App\Http\Controllers\HomeController;
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

Route::get('/', function () {
    return view('welcome');
});
Route::resource('home', HomeController::class);
Route::resource('categories', CategoryController::class);
Route::resource('categories_subs', CategorySubsController::class);
Route::resource('product', ProductController::class);

Route::get('getCourse/{id}', function ($id) {
  $category_sub = CategorySubs::where('category_id',$id)->get();
  return response()->json($category_sub);
});