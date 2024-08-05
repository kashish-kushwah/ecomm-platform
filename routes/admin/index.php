<?php

use App\Http\Controllers\admin\CategoryController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\ProductController;
use App\Http\Controllers\admin\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix("admin")->middleware("can:isAdmin")->group(function(){
  Route::get('dashboard', [DashboardController::class,'index'])->name('admin.dashboard');
  Route::resource("user", UserController::class,[
    'as' => 'admin'
    
  ]);
  Route::resource('category', CategoryController::class,[
    'as' => 'admin'
  ]);
  Route::resource('product', ProductController::class,[
    'as' => 'admin'
  ]);
  Route::get('change-password/{user}', [UserController::class,'changePassword'])->name('admin.user.change-password');
  Route::post('change-password/{user}', [UserController::class,'changePasswordStore'])->name('admin.user.change-password-store');
});

include __DIR__.'/users.php';