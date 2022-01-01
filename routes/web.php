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

Route::get('/home', 'HomeController@index')->middleware('verified');



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
Route::post('/filter-by-date', 'AdminController@filter_by_date');
Route::post('/filter-by-date1', 'AdminController@filter_by_date1');

//Medical declaration
Route::get('/medicalManagement', 'Admin\MedicalDeclarationController@index');

//Account management
Route::get('/accountManagement', 'Admin\AccountController@index')->name('accountManagement');
Route::post('/accountManagement/addAccount', 'Admin\AccountController@addAccountAdmin')->name('accountManagement.addAccountAdmin');
// Route::post('ajax', [
//     'uses' => 'Admin\AccountController@addAccountAdmin',
//     'as' => 'addAccountAdmin'
// ]);

// Route::post('/addAccountAdmin', 'Admin\AccountController@addAccountAdmin')->name('addAccountAdmin');

// Route::get('/admin/form-advanced', function () {
//     return view('admin.form_advanced');
// });

// Route::get('/admin/form-validation', function () {
//     return view('admin.form_validation');
// });

// Route::get('/admin/form-wizards', function () {
//     return view('admin.form_wizards');
// });

// Route::get('/admin/form', function () {
//     return view('admin.form');
// });

// Route::get('/admin/icons', function () {
//     return view('admin.icons');
// });

// Route::get('/admin/glyphicons', function () {
//     return view('admin.glyphicons');
// });

// Route::get('/admin/invoice', function () {
//     return view('admin.invoice');
// });

// Route::get('/admin/profile', function () {
//     return view('admin.profile');
// });

// Route::get('/admin/projects', function () {
//     return view('admin.projects');
// });

// Route::get('/admin/project-detail', function () {
//     return view('admin.project_detail');
// });

// Route::get('/admin/contacts', function () {
//     return view('admin.contacts');
// });

// Route::get('/admin/tables', function () {
//     return view('admin.tables');
// });

// Route::get('/admin/tables-dynamic', function () {
//     return view('admin.tables_dynamic');
Route::resource('/domesticGuest', 'DomesticGuestController');


