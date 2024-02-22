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
    return view('index');
})->name('home');


Route::prefix('/cameras')->group(function(){
    Route::get('/', function () {
        return view('cameras');
    })->name('cameras');

    Route::get('/detail/{id}',function(){
        return view('camera-detail');
    })->name('cameraDetail');
});

Route::prefix('/studios')->group(function(){
    Route::get('/',function(){
        return view('studios');
    })->name('studios');

    Route::get('/detail/{id}',function(){
        return view('studio-detail');
    })->name('studioDetail');
});
    