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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/track/{id}', 'HomeController@track_id')->name('track');


Auth::routes(['login' => false]);
Auth::routes(['register' => false]);

Route::group(['middleware' => ['preventbackbutton','auth']], function () {
Route::group(['as' => 'admin.','prefix' => 'admin','namespace' => 'Admin','middleware' => ['auth','admin']], function(){
     
    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('company-master','CompanyController@index')->name('company.view');
    Route::get('company-master/change','CompanyController@index_change')->name('company.index_change');
    Route::post('company-master/change','CompanyController@change')->name('company.change');
    Route::post('company-master','CompanyController@store')->name('company.store');
    Route::put('company-master/update','CompanyController@update')->name('company.update');

    Route::get('branch-master','BranchController@index')->name('branch.view');
    Route::get('branch-master/add','BranchController@add')->name('branch.add');
    Route::get('branch-master/edit/{id}','BranchController@edit')->name('branch.edit');
    Route::delete('branch-master/delete/{id}','BranchController@delete')->name('branch.delete');

    Route::get('sales-master','CompanyController@sales')->name('courier.sales');
    Route::get('sales-master/report/{from_date}/{to_date}','CompanyController@report')->name('courier.report');

    Route::get('status-master','StatusController@index')->name('courier.index');
    Route::get('status-master/pickup','StatusController@index_pickup')->name('courier.pickup');
    Route::get('status-master/shipped','StatusController@index_shipped')->name('courier.shipped');
    Route::get('status-master/intransit','StatusController@index_intransit')->name('courier.intransit');
    Route::get('status-master/arrived','StatusController@index_arrived')->name('courier.arrived');
    Route::get('status-master/delivery','StatusController@index_delivery')->name('courier.delivery');
    Route::get('status-master/delivered','StatusController@index_delivered')->name('courier.delivered');
    Route::get('courier-master/view/{id}','StatusController@view')->name('courier.view');
});
});

Route::group(['middleware' => ['preventbackbutton','auth']], function () {
Route::group(['as' => 'staff.','prefix' => 'staff','namespace' => 'Staff','middleware' => ['auth','staff']], function(){

    Route::get('dashboard','DashboardController@index')->name('dashboard');
    Route::get('staff-master','CourierController@index')->name('courier.view');
    Route::get('staff-master/pickup','StatusController@index_pickup')->name('courier.pickup');
    Route::get('staff-master/shipped','StatusController@index_shipped')->name('courier.shipped');
    Route::get('staff-master/intransit','StatusController@index_intransit')->name('courier.intransit');
    Route::get('staff-master/arrived','StatusController@index_arrived')->name('courier.arrived');
    Route::get('staff-master/delivery','StatusController@index_delivery')->name('courier.delivery');
    Route::get('staff-master/delivered','StatusController@index_delivered')->name('courier.delivered');
    Route::get('courier-master/add','CourierController@add')->name('courier.add');
    Route::get('courier-master/edit/{id}','CourierController@edit')->name('courier.edit');
    Route::delete('courier-master/delete/{id}','CourierController@delete')->name('courier.delete');
   
    Route::get('status-master/search','StatusController@search')->name('courier.search');
    Route::get('status-master/searches/{id}','StatusController@searches')->name('courier.searches');
});  
});



