<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\BidanController;
use App\Http\Controllers\AnakController;
use App\Http\Controllers\VaksinController;

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

Route::get('/login', [MainController::class, 'login'])->name('login');  


Route::namespace('admin')->prefix('admin')->name('admin.')->group(function(){
    Route::get('/beranda', [MainController::class, 'beranda'])->name('beranda');  

    Route::namespace('pegawai')->prefix('pegawai')->name('pegawai.')->group(function(){
        Route::get('/', [PegawaiController::class, 'index'])->name('index');
        Route::post('/',[PegawaiController::class, 'store'])->name('store');
        Route::get('/{uuid}',[PegawaiController::class, 'edit'])->name('edit');
        Route::put('/{uuid}', [PegawaiController::class, 'update'])->name('update');  
        Route::get('/delete/{uuid}',[PegawaiController::class, 'destroy'])->name('destroy');
    });

    Route::namespace('bidan')->prefix('bidan')->name('bidan.')->group(function(){
        Route::get('/', [BidanController::class, 'index'])->name('index');
        Route::post('/',[BidanController::class, 'store'])->name('store');
        Route::get('/{uuid}',[BidanController::class, 'edit'])->name('edit');
        Route::put('/{uuid}', [BidanController::class, 'update'])->name('update');  
        Route::get('/delete/{uuid}',[BidanController::class, 'destroy'])->name('destroy');
    });

    Route::namespace('anak')->prefix('anak')->name('anak.')->group(function(){
        Route::get('/', [AnakController::class, 'index'])->name('index');
        Route::post('/',[AnakController::class, 'store'])->name('store');
        Route::get('/detail/{uuid}',[AnakController::class, 'show'])->name('show');
        Route::get('/{uuid}',[AnakController::class, 'edit'])->name('edit');
        Route::put('/{uuid}', [AnakController::class, 'update'])->name('update');  
        Route::get('/delete/{uuid}',[AnakController::class, 'destroy'])->name('destroy');
    });

    Route::namespace('vaksin')->prefix('vaksin')->name('vaksin.')->group(function(){
        Route::get('/', [VaksinController::class, 'index'])->name('index');
        Route::post('/',[VaksinController::class, 'store'])->name('store');
        Route::get('/detail/{uuid}',[VaksinController::class, 'show'])->name('show');
        Route::get('/{uuid}',[VaksinController::class, 'edit'])->name('edit');
        Route::put('/{uuid}', [VaksinController::class, 'update'])->name('update');  
        Route::get('/delete/{uuid}',[VaksinController::class, 'destroy'])->name('destroy');
    });

});
