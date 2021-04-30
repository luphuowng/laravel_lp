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
    return view('admin.index');
});


Route::get('/category', 'CategoryController@index')->name('category.index');
Route::get('/category-create', 'CategoryController@create')->name('category.create');
Route::post('/category-store', 'CategoryController@store')->name('category.store');
Route::get('/category-delete/{idCat}', 'CategoryController@destroy')->name('category.destroy');
Route::get('/category-edit/{idCat}', 'CategoryController@edit')->name('category.edit');
Route::post('/category-update', 'CategoryController@update')->name('category.update');

Route::get('/ustomer', 'ustomerController@index')->name('customer.index');
Route::get('/ustomer-create', 'ustomerController@create')->name('ustomer.create');
Route::post('/ustomer-store', 'ustomerController@store')->name('ustomer.store');
Route::post('/ustomer-delete/{idCus}', 'ustomerController@delete')->name('ustomer.delete');
Route::post('/ustomer-edit/{idCus}', 'ustomerController@edit')->name('ustomer.edit');
Route::post('/ustomer-update', 'ustomerController@update')->name('ustomer.update');

Route::get('/product', 'ProductController@index')->name('product.index');
Route::get('/product-create', 'ProductController@create')->name('product.create');
Route::post('/product-store', 'ProductController@store')->name('product.store');
Route::get('/product-delete/{idPro}', 'ProductController@delete')->name('product.delete');
Route::get('/product-edit/{idPro}', 'ProductController@edit')->name('product.edit');
Route::post('/product-update', 'ProductController@update')->name('product.update');

Route::get('/employees', 'EmployeesController@index')->name('employees.index');
Route::get('/employees-create', 'EmployeesController@create')->name('employees.create');
Route::post('/employees-store', 'EmployeesController@store')->name('employees.store');
Route::post('/employees-delete/{idEmp}', 'EmployeesController@delete')->name('employees.delete');
Route::get('/employees-edit/{idEmp}', 'EmployeesController@edit')->name('employees.edit');
Route::post('/employees-update', 'EmployeesController@update')->name('employees.update');
