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

Route::get('/link', '\App\Models\Affiliate\Controllers\AffiliateLinkController@index');

Route::get('/', function () {
  return view('welcome');
})->name('affiliate.homepage')->middleware(['auth']);

Route::get('/amp', function () {
  return view('amp');
});

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
