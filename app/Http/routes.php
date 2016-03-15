<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('base');
});

Route::controllers([
	'partners'	=> 'partner\PartnersController',
	'products'	=> 'products\ProductsController',
	'companies'	=> 'companies\CompaniesController']);

//routes for partners views
Route::get('partnersList', 'partner\PartnersController@getAllPartner');
Route::get('partnerform', 'partner\PartnersController@showPartner');
Route::get('partnerinfo/{partner_id}', 'partner\PartnersController@getPartnerData');
Route::post('updatePartner', 'partner\PartnersController@updatePartner');
Route::delete('deletePartner/{partner_id}', 'partner\PartnersController@deletePartner');

//routes for products views
Route::get('productslist', 'products\ProductsController@getAllProducts');
Route::get('productform',  'products\ProductsController@showProduct');
Route::get('productinfo/{product_id}', 'products\ProductsController@getDataProduct');
Route::post('updateProduct', 'products\ProductsController@updateProduct');
Route::delete('deleteProduct/{product_id}', 'products\ProductsController@deleteProduct');

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
