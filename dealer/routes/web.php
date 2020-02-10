<?php

Route::get('/login', 'data@login');
Route::post('/login', 'data@signin');
Route::get('/page', 'data@home');
Route::get('/logout', 'data@logout');
Route::get('/produk', 'data@ambilProduk');
Route::get('/inputProduk', 'data@inputProduk');
Route::post('/inputProduk', 'data@kirimProduk');
Route::get('/editProduk/{id_produk}', 'data@edit');
Route::post('/editProduk/{id_produk}', 'data@editProduk');
Route::get('/hapusProduk/{id_produk}', 'data@hapusProduk');

//

Route::get('/produk1', 'index@home');
Route::get('/home', 'index@awal');
Route::get('/dealer', 'index@dealer');
Route::get('/detail_produk', 'index@detail_produk');
Route::get('/matic_produk', 'index@matic_produk');
Route::get('/sport_produk', 'index@sport_produk');
// Route::get('/product', 'index@produk');
