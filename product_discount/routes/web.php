<?php

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

Route::get('/product', function () {
    return view('/product');
});
Route::post('/product_discount_laravel', function (Illuminate\Http\Request $request){
    $productDescription = $request->description;
    $listPrice = $request->listprice;
    $discountPercent = $request->discount;
    $discountAmount = $listPrice * $discountPercent * 0.01;
    $discountPrice = $listPrice - $discountAmount;
    return view('/product_discount_laravel',compact(['productDescription','listPrice','discountPercent','discountAmount','discountPrice']));
});
