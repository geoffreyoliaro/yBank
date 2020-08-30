<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('/accounts', 'api\accounts\AccountsController@create');
Route::get('accounts/{id}', 'api\accounts\AccountsController@getAccountById');
Route::get('accounts/{id}/transactions', 'api\accounts\AccountsController@getTransactionsById');
Route::post('accounts/{id}/transactions', 'api\accounts\AccountsController@commitTransaction');