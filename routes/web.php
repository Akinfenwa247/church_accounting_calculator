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

Route::get('/', function () {
    return view('login');
});

Auth::routes();
Route::get('/logout', 'Auth\LoginController@logout');
//Route::resource('accounting', 'AccountController');
Route::get('accounting', 'AccountController@index')->name('accounting.index')->middleware('admin');
Route::get('accounting/{id}', 'AccountController@show')->name('accounting.show')->middleware('admin');
Route::get('/adduseraccount', 'AccountController@user')->name('registration')->middleware('admin');
Route::get('/users', 'AccountController@users')->name('users')->middleware('admin');
Route::get('/downloadPDF/{id}','AccountController@downloadPDF')->name('pdf');
Route::post('add', 'AccountController@add')->name('registeruser')->middleware('admin');
Route::post('updateProfile', 'AccountController@editProfile')->name('editProfile')->middleware('admin');
Route::get('calculate', 'CalculatorController@index')->name('calculate')->middleware('admin');
Route::post('calculate', 'CalculatorController@calculate')->name('calculate')->middleware('auth');
Route::delete('reject/{id}', 'CalculatorController@reject')->name('reject')->middleware('admin');
Route::get('branches', 'BranchController@index')->name('branch.index')->middleware('admin');
Route::post('branches', 'BranchController@create')->name('branch.create')->middleware('admin');
Route::get('dashboard', 'BranchController@send')->name('send')->middleware('auth');

