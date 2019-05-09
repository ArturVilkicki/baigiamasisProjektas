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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', 'ShowProducts@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles','RolesController');
    Route::resource('users','UsersController');
    Route::resource('products','ProductController');
});*/
Route::resources([
	'admin/products' => 'ProductController',
	'admin/categories' => 'CategoriesController',
	'admin/shops' => 'ShopController',
	'admin/permissions' => 'PermissionsController',
	'admin/roles' => 'RolesController',
	'admin/users' => 'UserController',
	'car' => 'CarsController'
]);
Route::post('fileUpload', [
	'as' => 'categories.store',
	'uses' => 'CategoriesController@store'

]);