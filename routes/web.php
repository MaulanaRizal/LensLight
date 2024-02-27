<?php

use App\Http\Controllers\loginController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\UsersController;
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

// ======== Home Section =======
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
// ======== Home Section =======

// ======== Login Section =======

Route::prefix('/login')->group(function(){
    Route::get('/',[loginController::class,'index'])->name('login');
    Route::post('/', [loginController::class, 'authenticate'])->name('login');

    Route::post('/logout',[loginController::class, 'invalidate'])->name('logout');
});

// ======== Login Section =======


// ======== Admin Section =======

Route::prefix('/auth')->middleware(['auth'])->group(function(){
    Route::get('/',function(){
        return view('auth.dashboard');
    })->name('dashboard');

    Route::prefix('/settings')->group(function(){
        Route::prefix('/users')->group(function(){
            Route::get('/',[UsersController::class,'index'])->name('users');
            Route::get('/getDataUser',[UsersController::class,'getuserData'])->name('getuserdata');
        });
    });

    Route::get('/blank',function(){
        return view('auth.blank');
    })->name('blank');

});

// Auth::routes();  

// ======== Admin Section =======
