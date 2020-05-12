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

/*
| Melakukan routes tanpa menggunakan method
|
// Route::get('/', function () {
//     return view('index');
// });

// Route::get('/about', function () {
//     $nama = 'Berlian Gymnastiar';
//     return view('about', ['nama' => $nama]);
// });

// Route::get('/product', function () {
//     $product = 'Hefa Shop';
//     return view('product', ['product' => $product]);
// });
|
// *

/* 
| Melakukan routes dengan menggunakan method dan controller terpisah
*/

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');


Route::get('/product', 'ProductController@index');

//Products
Route::get('/products', 'ProductsController@index');
Route::get('/products/create', 'ProductsController@create');
Route::get('/products/{product}', 'ProductsController@show');
Route::post('/products', 'ProductsController@store');
Route::delete('/products/{product}', 'ProductsController@destroy');
Route::get('/products/{product}/edit', 'ProductsController@edit');
Route::patch('products/{product}', 'ProductsController@update');



//catatan!
/* @index adalah kita membuat method index dikontoller Products fungsinya untuk menampilkan seluruh daftar produk */
/* @show adalah kita membuat method show fungsinya untuk menampilkan detail satu produk */
/* {product} itu sama dengan kita mencari berdasarkan id product tersebut */
