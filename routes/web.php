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

Route::get('/add-package', 'Catering_packageController@cateringPackageInsert');
Route::get('/show-packages', 'Catering_packageController@showAllPackages');
Route::get('/create-package', 'Catering_packageController@create');
Route::get('/showadmin', 'Catering_packageController@adminShowAllPackage');
Route::get('/edit-caterpackage/{id}', 'Catering_packageController@edit');
Route::get('/update-caterpackage/{id}', 'Catering_packageController@update');
Route::get('/delete-caterpackage/{id}', 'Catering_packageController@destroy');



Route::get('/getPackage/{id}', 'Catering_packageController@getOnePackage');
Route::get('/set-catering-order', 'CustomerController@setCateringOrder');
// To lis all catering orders
Route::get('/show_corders', 'Catering_orderController@adminShowAllCOrders');
