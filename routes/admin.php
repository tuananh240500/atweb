<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\NewsController;

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

Route::prefix('admin')->name('admin.')->middleware('role:Admin')->group(function(){
    Route::get('dashboard', [HomeController::class, 'getIndex'])->name('dashboard');
    
    Route::prefix('user')->name('user.')->group(function (){
        Route::get('get', [UserController::class, 'getIndex'])->name('get');
        
    });
    Route::prefix('news')->name('news.')->group(function (){
         Route::get('get', [NewsController::class, 'getIndex'])->name('get');
         Route::delete('/delete', [NewsController::class, 'delete'])->name('delete'); 
        });
});
