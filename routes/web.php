<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\multiFormController;
use App\Http\Controllers\userController;


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

Route::get('/welcome', function () {
    return view('welcome');
});

// Route::resource('/Users', \App\Http\Controllers\multiFormController::class);

Route::resource('user', \App\Http\Controllers\userController::class);
// Route::get('join_table', [userController::class, 'index2']);

// Route::get('all/employee/card', [App\Http\Controllers\multiFormController::class, 'cardAllEmployee'])->name('all/employee/card');
// Route::get('all/employee/list', [App\Http\Controllers\multiFormController::class, 'listAllEmployee'])->name('all/employee/list');

