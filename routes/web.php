<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

// Redirect root to login page
Route::get('/', fn () => redirect()->route('login'));


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

// Auth routes (uses Auth::routes())
Auth::routes();

// Admin routes
Route::group(['prefix'=> 'admin', 'middleware'=>['admin']],function (){
    Route::get('/', [App\Http\Controllers\AdminController::class, 'dashboard'])->name('admin.dashboard');
});
   

// User routes
Route::group(['prefix'=> 'user', 'middleware'=>['auth']], function () {
    Route::get('/', [App\Http\Controllers\UserController::class, 'dashboard'])->name('user.dashboard');
});




