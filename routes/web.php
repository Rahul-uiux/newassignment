<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\AdminController;
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

Route::view("/login","login");
Route::view("/admin","admin");
Route::view("/register","register");
Route::get('/logout',function(){
    Session::forget('user');
    return redirect('login');
});
Route::get('/adminlogout',function(){
    Session::forget('admin');
    return redirect('admin');
});
Route::post("/adminLogin",[AdminController::class,'admin']);
Route::post("/login",[UserController::class,'login']);
Route::post("/register",[UserController::class,'register']);
Route::get("/",[ProductController::class,'index']);
Route::get("detail/{id}",[ProductController::class,'detail']);
Route::get("search",[ProductController::class,'search']);
Route::post("add_to_cart",[ProductController::class,'addToCart']);
Route::get("cartList",[ProductController::class,'cartList']);
Route::get("remove/{id}",[ProductController::class,'remove']);
Route::get("order",[ProductController::class,'order']);
Route::post("orderplace",[ProductController::class,'orderplace']);
Route::get("myorder",[ProductController::class,'myOrder']);
Route::get("dashboard",[AdminController::class,'dashboard']); 
Route::get("addproAdmin",[AdminController::class,'addproAdmin']); 
Route::post("/allAdd",[AdminController::class,'allAdd']);  
Route::get("deleteAdmin/{id}",[AdminController::class,'deleteAdmin']); 

