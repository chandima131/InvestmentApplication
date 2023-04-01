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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/register', function () {
    return view('auth.register');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/profile', function () {
    return view('admin.layouts.profile');
});

Route::get('/aboutus', function () {
    return view('aboutus');
})->middleware(['auth'])->name('aboutus');
require __DIR__.'/auth.php';

//CLient
Route::namespace('Client')->group(function () {

Route::middleware('auth')->group(function () {
    Route::get('dashboard', 'HomeController@index')->name('dashboard');
    Route::get('assigned', 'HomeController@assigned')->name('assigned');

    Route::get('edit/{assign_id}/{status}', 'HomeController@update')->name('edit');

});
});

// Admin
Route::namespace('Admin')->prefix('admin')->name('admin.')->group(function () {
    Route::namespace('Auth')->middleware('guest:admin')->group(function () {
        // login route
        Route::get('login', 'AuthenticatedSessionController@create')->name('login');
        Route::post('login', 'AuthenticatedSessionController@store')->name('adminlogin');
    });
    Route::middleware('admin')->group(function () {
        Route::get('dashboard', 'HomeController@index')->name('dashboard');
        Route::get('add_ideas', 'HomeController@add_ideas') -> name ('add_ideas');
        Route::get('admin-test', 'HomeController@adminTest')->name('admintest');
        Route::get('editor-test', 'HomeController@editorTest')->name('editortest');
        Route::get('dashboard', 'HomeController@ideas')->name('dashboard');
        Route::put('save','HomeController@save')->name('save');
        Route::resource('posts', 'PostController');
    });
    Route::post('logout', 'Auth\AuthenticatedSessionController@destroy')->name('logout');
});

// RelationshipManager
Route::namespace('RelationshipManager')->prefix('relationshipmanager')->name('relationshipmanager.')->group(function () {
    Route::namespace('Auth')->middleware('guest:admin')->group(function () {
        // login route
        Route::get('login', 'AuthenticatedSessionController@create')->name('login');
        Route::post('login', 'AuthenticatedSessionController@store')->name('relationshipmanagerlogin');
        Route::post('Register_update/{client_id}','AuthenticatedSessionController@Register_update')->name('Register_update');

    });
    Route::middleware('relationshipmanager')->group(function () {
        // Route::get('dashboard','HomeController@index')->name('dashboard');


        // Route::get('relationshipmanager-test','HomeController@relationshipmanagerTest')->name('relationshipmanagertest');
        Route::get('edit/{client_id}', 'HomeController@edit')->name('edit');
        Route::get('dashboard', 'HomeController@clients')->name('dashboard');
        Route::resource('investmantideas', 'InvestmantIdeasController');
        Route::get('search', 'InvestmantIdeasController@search')->name('seach');
        Route::get('viewmore/{id}', 'InvestmantIdeasController@viewmore')->name('viewmore');
        Route::put('update/{client_id}', 'HomeController@update')->name('update');
    });
    Route::post('logout', 'Auth\AuthenticatedSessionController@destroy')->name('logout');


    //  Route::get('dashboard','HomeController@index')->name('dashboard');
    //  Route::post('logout','Auth\AuthenticatedSessionController@destroy')->name('logout');
});
