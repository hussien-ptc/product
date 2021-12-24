<?php
use App\Models\Product;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
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

    $prodects = Product::all();
    return view('welcome',compact('prodects'));
});

Route::get('index', [ProductController::class, 'index']);
Route::get('create',[ProductController::class, 'create']);
Route::post('store', [ProductController::class, 'store']);
Route::get('edit/{id}',[ProductController::class,'edit']);
Route::post('update/{id}',[ProductController::class,'update'])->name('update');
Route::get('destroy/{id}', [ProductController::class, 'destroy']);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
