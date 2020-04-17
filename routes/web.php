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

Route::get('/', [
    'as' => 'home', 'uses' => 'SiteController@home'
]);
Route::get('policies', [
    'as' => 'policies', 'uses' => 'SiteController@policies'
]);
Route::get('profile', [
    'as' => 'profile', 'uses' => 'SiteController@profile'
]);
Route::get('states/{state_id}', [
    'as' => 'states.show', 'uses' => 'SiteController@states'
]);