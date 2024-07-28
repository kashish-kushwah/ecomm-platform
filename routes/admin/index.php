<?php

use App\Http\Controllers\admin\DashboardControlller;
use Illuminate\Support\Facades\Route;

Route::prefix("admin")->middleware("can:isAdmin")->group(function(){
  Route::get('dashboard', [DashboardControlller::class,'index'])->name('admin.dashboard');
});