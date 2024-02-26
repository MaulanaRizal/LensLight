<?php

use Illuminate\Support\Facades\Auth;
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
    return view('home.index');
})->name('home');


Route::prefix('/cameras')->group(function(){
    Route::get('/', function () {
        return view('home.cameras');
    })->name('cameras');

    Route::get('/detail/{id}',function(){
        return view('home.camera-detail');
    })->name('camera detail');
});

Route::prefix('/studios')->group(function(){
    Route::get('/',function(){
        return view('home.studios');
    })->name('studios');

    Route::get('/detail/{id}',function(){
        return view('home.studio-detail');
    })->name('studio detail');
});

Route::prefix('/accessories')->group(function(){
    Route::get('/',function(){
        return view('home.accessories');
    })->name('accessories');

    Route::get('/detail/{id}',function(){
        return view('home.accessories-detail');
    })->name('accessories detail');
});

Route::get('/about',function(){
    return view('home.about');
})->name('about us');
    
Route::get('/login',function(){
    return view('auth.login');
});
Route::prefix('/auth')->group(function(){
    Route::get('/',function(){
        return view('auth.dashboard');
    })->name('dashboard');
});

// Auth::routes();

