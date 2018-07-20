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

Route::get('/', '\App\Models\Affiliate\Controllers\AffiliateLinkController@index')->name('affiliate.homepage')->middleware(['auth']);
// Route::get('/profile', '\App\Models\User\Controllers\UserController@edit')->name('affiliate.profile')->middleware(['auth']);

Route::get('/link', '\App\Models\Affiliate\Controllers\AffiliateLinkController@link');


Route::get('/amp', function () {
  return view('amp');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/profile', 'UserController@edit')->name('profile.edit')->middleware(['auth']);
Route::patch('profile/update', 'UserController@update')->name('profile.update')->middleware(['auth']);
