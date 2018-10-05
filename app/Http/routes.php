<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
*/

Route::get('/', 'WelcomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');

Route::post('/users/{user}/meals', 'MealsController@store');
Route::get('/meals/delete/{meal}', 'MealsController@destroy');

Route::resource('/meals', 'MealsController');

Route::post('/meals/{meal}/foods', 'FoodsController@store');
