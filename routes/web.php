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
    return view('pages.index');
})->name('index');

Route::get('about-us', function () {
    return view('pages.about');
})->name('about-us');

Route::get('products', function () {
    return view('pages.products.product');
})->name('products');

Route::get('product-category', function () {
    return view('pages.products.product-category');
})->name('product-category');

Route::get('product-subcategory', function () {
    return view('pages.products.product-subcategory');
})->name('product-subcategory');

Route::get('product-details', function () {
    return view('pages.products.product-details');
})->name('product-details');

Route::get('contact-us', function () {
    return view('pages.contact');
})->name('contact-us');

Route::get('distributor-form', function () {
    return view('pages.forms.distributor');
})->name('distributor-form');

Route::get('dealer-form', function () {
    return view('pages.forms.dealer');
})->name('dealer-form');

Route::get('plumber-form', function () {
    return view('pages.forms.plumber');
})->name('plumber-form');