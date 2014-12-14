<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::controller('index', 'IndexController');
//Route::controller('trade', 'TradeController');
//Route::controller('user', 'UserController');

Route::get('/', 'IndexController@getIndex');
