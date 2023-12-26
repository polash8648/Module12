<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LocationController;
use App\Http\Controllers\UserController;

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
 Route::group(['prefix'=>'location','as'=>'location.'], function(){
    Route::get('', [LocationController::class, 'index'])->name('index');
  Route::get('create', [LocationController::class, 'create'])->name('create');
   Route::post('store', [LocationController::class, 'store'])->name('store');
    Route::get('edit/{id}', [LocationController::class, 'edit'])->name('edit');
    Route::post('update/{id}', [LocationController::class, 'update'])->name('update');
    Route::delete('delete/{id}', [LocationController::class, 'delete'])->name('delete');
    Route::get('delete1/{id}', [LocationController::class, 'delete'])->name('delete1');
 });

Route::group(['prefix'=>'user','as'=>'user.'], function(){
    Route::get('', [UserController::class, 'index'])->name('index');
    Route::get('create', [UserController::class, 'create'])->name('create');
    Route::post('store', [UserController::class, 'store'])->name('store');
    Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::post('update/{id}', [UserController::class, 'update'])->name('update');
    Route::delete('delete/{id}', [UserController::class, 'delete'])->name('delete');
    Route::get('delete1/{id}', [UserController::class, 'delete'])->name('delete1');
});

Route::group(['prefix'=>'seatallocation','as'=>'seatallocation.'], function(){
    Route::get('', [UserController::class, 'index'])->name('index');
    Route::get('create', [UserController::class, 'create'])->name('create');
    Route::post('store', [UserController::class, 'store'])->name('store');
    Route::get('edit/{id}', [UserController::class, 'edit'])->name('edit');
    Route::post('update/{id}', [UserController::class, 'update'])->name('update');
    Route::delete('delete/{id}', [UserController::class, 'delete'])->name('delete');
    Route::get('delete1/{id}', [UserController::class, 'delete'])->name('delete1');
});