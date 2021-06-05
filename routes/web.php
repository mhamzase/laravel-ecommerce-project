<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
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

Route::get("/login",[UserController::class,'login']);
Route::get("/register",[UserController::class,'register']);
Route::post("/register-user",[UserController::class,'registerUser']);
Route::post("/login-user",[UserController::class,'loginUser']);
Route::get("/logout",[UserController::class,'logout']);
Route::get("/reset-password",[UserController::class,'resetPassword']);
Route::post("/reset-user-password",[UserController::class,'resetUserPassword']);


Route::get("/home",[HomeController::class,'index']);

Route::get("/product-detail/{id}",[ProductController::class,'productDetail']);
Route::get("search",[ProductController::class,'search']);
Route::post("/add-to-cart",[ProductController::class,'addToCart']);
Route::get("/cartlist",[ProductController::class,'cartList']);
Route::get("/remove-cart-item/{cart_id}",[ProductController::class,'removeCartItem']);
Route::get("/ordernow",[ProductController::class,'orderNow']);
Route::post("/orderplace",[ProductController::class,'orderPlace']);
Route::get("/myorders",[ProductController::class,'myOrders']);
Route::post("/buynow",[ProductController::class,'buyNow']);
Route::post("/order-product",[ProductController::class,'orderProduct']);


