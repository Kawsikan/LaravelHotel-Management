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
/**
 * 
 * Authentication routes
 * Author: Pamal Ranasinghe
 * 
 * 
 */
Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/user', 'UserController@index')->name('user');
Route::get('/admin', 'AdminController@index')->name('admin');

/**
 * Navigation routes
 * author : pamal ranasinghe
 * 
 * 
 */
Route::get('/takeaway', function () {
    return view('admin.takeaway');
})->middleware('role:superadministrator');

Route::get('/vieworder', function () {
    return view('admin.vieworder');
})->middleware('role:superadministrator');
/**
 * 
 * To insert dummy values to items table : /insert-item
 * view that items : /show-item
 * 
 */
Route::get('/insert-item','ItemController@insertItems');
Route::get('/show-item','ItemController@show');
/**
 * To change customer details 
 */
Route::get('/getItem/{id}','ItemController@getOne');
Route::get('/confirmOrder','CustomerController@setOrder');
Route::get('/update-order/{id}','CustomerController@updateOrder');
Route::get('/delete-order/{id}','OrderController@destroy');
Route::get('/continue','CustomerController@message');


Route::get('/get-all-orders','OrderController@getAllForReport')->middleware('role:superadministrator');
Route::get('/download-report','OrderController@downloadPDF')->middleware('role:superadministrator');
Route::get('/view-all-orders','OrderController@getAllOrders')->middleware('role:superadministrator');
Route::get('/view/{id}','OrderController@getOneOrder')->middleware('role:superadministrator');
Route::get('/completed/{id}','OrderController@markAsCompleted')->middleware('role:superadministrator');
Route::get('/completed-orders','OrderController@getCompletedOrders')->middleware('role:superadministrator');

/**
 * 
 * author : Kawsikan
 */
// Let admin to add new package
Route::get('/add-package', 'Catering_packageController@cateringPackageInsert');
// Show all packages to customer
Route::get('/show-packages', 'Catering_packageController@showAllPackages');
// Show create new packages to Admin 
Route::get('/create-package', 'Catering_packageController@create');
// Show all packages to Admin
Route::get('/showadmin', 'Catering_packageController@adminShowAllPackage');
// Let  Admin to edit package details
Route::get('/edit-caterpackage/{id}', 'Catering_packageController@edit');
Route::get('/update-caterpackage/{id}', 'Catering_packageController@update');
// Admin delete catering packages
Route::get('/delete-caterpackage/{id}', 'Catering_packageController@destroy');


Route::get('/getPackage/{id}', 'Catering_packageController@getOnePackage');
Route::get('/set-catering-order', 'CustomerController@setCateringOrder');
// Admin page to view catering order detail
Route::get('/show_corders', 'CustomerController@adminShowAllCOrders');
// Admin page to individual orders with unique customer ID
Route::get('/view_corders/{id}', 'CustomerController@adminViewAllCOrders');
// Admin delete catering orders
Route::get('/delete-corder/{id}', 'CustomerController@destroyCOrder');


// PDF catering package report
Route::get('/cpackage-report','Catering_packageController@getAllPDFReport');
// Download package report
Route::get('/download-cpackage','Catering_packageController@downloadAllPDF');

// PDF catering Order report
Route::get('/corder-report','CustomerController@getAllPDFReport');
// Download Order report
Route::get('/download-corder','CustomerController@downloadAllPDF');

// cater package  search
Route::get('/search-cpackage','Catering_packageController@search');
Route::get('/search-corder','CustomerController@searchcorder');
/**
 * 
 * End Of : Kawsikan
 */



