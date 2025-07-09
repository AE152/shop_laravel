<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Main\IndexController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', IndexController::class)->name('main.index');