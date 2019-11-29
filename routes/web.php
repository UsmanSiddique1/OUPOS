<?php

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

Route::get('/admin/dashboard', function () {
    return view('Admin.Pages.dashboard');
});

// Categories Area

Route::get('/admin/categories', 'CategoriesController@index');
Route::get('/admin/categories/show', 'CategoriesController@show');
Route::get('/admin/categories/add', 'CategoriesController@create');
Route::post('/admin/addcategories/store', 'CategoriesController@store');
Route::get('/admin/category/edit/{id}', 'CategoriesController@edit');
Route::post('/admin/category/update', 'CategoriesController@update');


// Products Area

Route::get('/adming/products', 'ProductsController@index');
Route::get('/adming/products/show', 'ProductsController@show');
Route::get('/admin/products/add', 'ProductsController@create');
Route::post('/admin/product/store', 'ProductsController@store');
Route::get('/admin/product/edit/{id}', 'ProductsController@edit');
Route::post('/admin/product/edit/update', 'ProductsController@update');

// Supplier Area

Route::get('/admin/suppliers', "SupplierController@index");
Route::get('/admin/suppliers/show', 'SupplierController@show');
Route::get('/admin/suppliers/add', 'SupplierController@show');
Route::get('/admin/suppliers/store', 'SupplierController@show');
Route::get('/admin/suppliers/edit/{id}', 'SupplierController@show');
Route::get('/admin/suppliers/edit/update', 'SupplierController@show');