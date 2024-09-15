<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\userController;
use App\Http\Middleware\ValidUser;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/about', function () {
    return view('pages/about');
})->name('about-page');




//calling login through controller
Route::get('/login',
    [AuthController::class,'login_index']
)->name('login-page');


Route::post('/registration',
    [userController::class,'register_user']
)->name('registerSave');

Route::post('/login',
    [userController::class,'login_user']
)->name('loginSave');

Route::get('/dashboard',
    [userController::class,'dashboardPage']
)->name('dashboard-page')
 ->middleware('IsValidUser');

// ->middleware(ValidUser::class,TestUser::class);
// Route::middleware(ValidUser::class,TestUser::class)->group(function(){  
//     Route::get('/dashboard',
//     [userController::class,'dashboardPage']
//     )->name('dashboard-page');

//     Route::get('/dashboard',
//     [userController::class,'dashboardPage']
//     )->name('dashboard-page')->withoutMiddleware([Testuser::class]);
// });

Route::get('/logout',
    [userController::class,'logout']
)->name('logout-btn');

Route::fallback(function(){
    return "<h2> No such page </h2>";
});


Route::get('/s',[AuthController::class,'index']);

Route::get('/store',[AuthController::class,'store_session']);

Route::get('/del',[AuthController::class,'delete_session']);

