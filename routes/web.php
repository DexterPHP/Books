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

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/Cater', 'CaterController@index')->name('cater');
Route::get('/Cater/{id}', 'CaterController@getBooks')->name('cater');


Route::prefix('pdf')->group(function (){
    Route::get('/view/{id}', 'BooksController@show')->name('ShowBook');
    Route::get('/view', function(){return view('website.Error_page');})->name('NotFound');
    Route::get('/read/{id}', 'BooksController@read')->name('ReadBook');
    Route::get('/view', function(){return view('website.Error_page');})->name('NotFound');
});



Route::get('search','BooksController@search');
Route::prefix('c')->group(function (){
    Route::get('/{id}', 'BooksController@shourtCourse');
});


Auth::routes();

// Control Panel
Route::prefix('Admin')->group(function (){

    Route::get('/home','AdminController@index');
    Route::get('/','AdminController@index');

    // Category's
    Route::get('addCategory','AdminController@addCategory');
    Route::post('addCategory','AdminController@addCategory');
    // NewBook
    Route::get('NewBook','AdminController@addNewBook');
    Route::post('NewBook','AdminController@addNewBook');
    // Select Book To Update
    Route::get('UpdateBook','AdminController@UpdateBook');
    // Update Book
    Route::get('edit/{id}','AdminController@UpdateNow');
    Route::post('edit/{id}','AdminController@UpdateNow');
    // adSense
    Route::get('adSense','AdminController@adSense')->name('adSense');
});


Route::get('privacy-policy',function (){
    return view('website.privacy-policy');
});
Route::get('suggest',function (){
    return view('website.contact');
});
Route::get('report',function (){
    return view('website.contact');
});

Route::prefix('contact-us')->group(function (){
    Route::get('/','Contactus@send');
    Route::post('/','Contactus@send');
});

