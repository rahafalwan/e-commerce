<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
use App\Product;
use App\Http\Controllers\Auth\AuthController;

Route::get('/', [
    'as' => 'show.home',
    'uses' => 'Controller@showHome'
    ]);


 


Route::get('/about', [
    'as' => 'show.about',
    'uses' => 'Controller@showAbout'
    ]);
    Route::get('/contact-us', [
        'as' => 'show.contact-us',
        'uses' => 'Controller@showContactus'
        ]);
Route::get('/store', [
    'as' => 'show.store',
    'uses' => 'StoreController@showStore'
    ]);
Route::get('/store-page2', [
        'as' => 'show.store2',
        'uses' => 'StoreController@showStore2'
        ]);


Route::get('/detail/{name}', [
        'as' => 'show.productsDetail',
        'uses' => 'StoreController@showProductsDetail'
        ]);
Route::get('/store/{type}', [
            'as' => 'show.productsbyType',
            'uses' => 'StoreController@showProductsbyType'
        ]);
   
Route::get('/carts/{user_id}', [
            'as' => 'show.carts',
            'uses' => 'CartController@showCarts'
        ]);
   
    Route::post('add-review','StoreController@addReview');
    Route::post('add-to-cart','CartController@addToCart');
    Route::post('update-cart/{quantity}','CartController@updateCart');
    Route::post('delete-cart','CartController@deleteItemCart');
 
    
Route::auth();

Route::get('/Login', 'HomeController@index');
