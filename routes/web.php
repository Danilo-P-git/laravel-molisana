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

Route::get('/', function () {
    return view('home');
})-> name('home');



Route::get('/prodotti', function () {
    return view('prodotti');
})-> name('prodotti');

Route::get('/prodotti/show/{id}', function ($id) {

  function not_null($value) {
      return (config("pasta.$value") != null) ? $value : false;
}
  $next_product = not_null($id + 1);
  $prev_product = not_null($id - 1);
  $prodotto = config("pasta.$id");
  $data = [
    "product"=> $prodotto,
    "prev"=> $prev_product,
    "next"=> $next_product,
  ];
  return view('prodotti-single', $data);
});


Route::get('/news', function () {
    return view('news');
})-> name('news');
