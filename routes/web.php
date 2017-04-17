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

//Route::get('/', 'AuthController@index');

/*Route::get('/', function() {
	return view('login');
});*/


Route::get('/', 'AuthController@index');
Route::post('/auth', ['uses' => 'AuthController@login', 'as' => 'auth']);
Route::get('/dashboard', ['uses' => 'PharmacyController@index', 'as' => 'dashboard']);
Route::get('/medicine', ['uses' => 'MedicineController@index', 'as' => 'medicine']);
Route::get('/companies', ['uses' => 'CompaniesController@index', 'as' => 'companies']);
Route::get('/newsale', ['uses' => 'SaleController@index', 'as' => 'newsale']);
Route::get('/suppliers', ['uses' => 'SuppliersController@index', 'as' => 'suppliers']);



// Medicine

Route::post('/medicine/create', ['uses' => 'MedicineController@create', 'as' => 'medicine.create'] );
Route::get('/medicine/edit/{id}', ['uses' => 'MedicineController@edit', 'as' => 'medicine.edit'] );
Route::post('/medicine/update/{id}', ['uses' => 'MedicineController@update', 'as' => 'medicine.update'] );
Route::post('/medicine/delete/{id}', ['uses' => 'MedicineController@delete', 'as' => 'medicine.delete'] );

// Company

Route::post('/company/create', ['uses' => 'CompaniesController@create', 'as' => 'company.create'] );
Route::get('/company/edit/{id}', ['uses' => 'CompaniesController@edit', 'as' => 'company.edit'] );
Route::post('/company/update/{id}', ['uses' => 'CompaniesController@update', 'as' => 'company.update'] );


// Category

Route::post('/category/create', ['uses' => 'CategoriesController@create', 'as' => 'category.create'] );
Route::get('/category/edit/{id}', ['uses' => 'CategoriesController@edit', 'as' => 'category.edit']);
Route::post('/category/update/{id}', ['uses' => 'CategoriesController@update', 'as' => 'category.update'] );
Route::post('/category/delete/{id}', ['uses' => 'CategoriesController@delete', 'as' => 'category.delete'] );


// Supplier

Route::post('/supplier/create', ['uses' => 'SuppliersController@create', 'as' => 'supplier.create'] );
Route::get('/supplier/edit/{id}', ['uses' => 'SuppliersController@edit', 'as' => 'supplier.edit']);
Route::post('/supplier/update/{id}', ['uses' => 'SuppliersController@update', 'as' => 'supplier.update'] );
Route::post('/supplier/delete/{id}', ['uses' => 'SuppliersController@delete', 'as' => 'supplier.delete'] );

// New Sale

Route::post('/newsale/insert', ['uses' => 'SaleController@insert', 'as' => 'newsale.insert']);
Route::post('/newsale/clear', ['uses' => 'SaleController@clear', 'as' => 'newsale.clear']);
Route::post('/newsale/save', ['uses' => 'SaleController@save', 'as' => 'newsale.save']);

