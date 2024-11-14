<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\editor\HomeController;

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('editor')->group(function(){
    Route::controller(HomeController::class)->group(function(){
        Route::get('/','index')->name('editor.home');
    });
});