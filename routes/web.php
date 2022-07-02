<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PenjualController;
use App\Http\Controllers\ShowController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/show/{id}', [ShowController::class, 'index'])->name('show');

Route::group(['middleware'=>'auth:sanctum'], function(){
    Route::get('/penjual', [PenjualController::class, 'index'])->name('penjual');
    Route::get('/penjual/add', 'App\Http\Controllers\PenjualController@add')->name('penjual.add');
    Route::get('/penjual/{id}', [PenjualController::class, 'show'])->name('penjual.show');
    Route::get('/penjual/edit/{id}', [PenjualController::class, 'edit'])->name('penjual.edit');
    Route::get('/penjual/delete/{id}', [PenjualController::class, 'delete'])->name('penjual.delete');
});

Route::group(['middleware'=>'auth:sanctum'], function(){
    Route::get('/admin', [AdminController::class, 'index'])->name('admin');
});

require __DIR__.'/auth.php';
