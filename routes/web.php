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
    return view('layouts.main');
});

Route::get('/addFewTransactions', 'TransactionController@addFewTransactions');
Route::get('/addOneTransaction', 'TransactionController@addOneTransaction');
Route::get('/karmaChanging', 'AdminController@karmaChanging');
Route::get('/transactionsList', 'TransactionController@getTransactionsList');
Route::get('/adminPage', 'AdminController@index');
Route::get('/ownBalance', 'AdminController@getOwnBalance');
Route::get('/usersBalance', 'AdminController@getUsersBalance');
Route::get('/addExpenses', 'AdminController@addExpenses');
Route::get('/balacePeriod', 'AdminController@getBalacePeriod');
Route::get('/settings','AdminController@settings');
/*Route::get('/', 'Controller@index');*/
