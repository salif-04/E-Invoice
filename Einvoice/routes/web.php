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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('home');
// Route::get('/CreateInvoice', 'Billing\InvoiceController@index');
// Route::get('/ManageItems', 'Billing\ItemsController@index');
// Route::get('/ManageTemplates', 'Billing\TemplateController@index');

Route::resource('invoices' , 'Billing\InvoiceController');
Route::resource('items' , 'Billing\ItemsController');
Route::resource('templs' , 'Billing\TemplatesController');

Route::get('/mail/{email}', 'MailController@send')->name('email');
