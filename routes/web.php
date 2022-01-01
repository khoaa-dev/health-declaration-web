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

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('home');
// });

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->middleware('verified')->name('home');

Route::get('/announ', function() {
    return view('announ');
})->name('announ');



// Route::get('/admin', 'AdminController@showImportantInfo')->middleware('role:admin');

//admin login
Route::get('/admin-login', 'AdminController@index')->name('admin-login');
//admin Dashboard
Route::get('/dashboard', 'AdminController@show_dashboard');
//
Route::post('/admin-dashboard','AdminController@dashboard');
//admin logout
Route::get('/admin-logout', 'AdminController@logout');
//
Route::post('/filter-by-date3', 'AdminController@filter_by_date3');
Route::post('/filter-by-date1', 'AdminController@filter_by_date1');

//Medical declaration
Route::get('/medicalManagement', 'Admin\MedicalDeclarationController@index');

//Account management
Route::get('/accountManagement', 'Admin\AccountController@index')->name('accountManagement');
Route::post('/accountManagement', 'Admin\AccountController@addAccountAdmin')->name('accountManagement.addAccountAdmin');
Route::get('/accountManagement/{id}', 'Admin\AccountController@deleteAccountAdmin')->name('deleteAccountAdmin');


// Route::post('ajax', [
//     'uses' => 'Admin\AccountController@addAccountAdmin',
//     'as' => 'addAccountAdmin'
// ]);

Route::resource('/domesticGuest', 'DomesticGuestController');

Route::get('/statistic','AdminController@show_statistic')->name('statistic');

Route::get('search', 'AdminController@getSearch');
Route::post('search', 'AdminController@action')->name('search');


