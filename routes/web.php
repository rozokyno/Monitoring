<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('auth.login');
});

Route::get('/login',function(){
    return view('auth.login');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
})->name('admin.dashboard.index');

Route::get('/tables', function () {
    return view('admin.dashboard.tables');
})->name('admin.dashboard.tables');


Route::get('/speedtest', function () {
    return view('admin.dashboard.speedtest');
})->name('admin.dashboard.speedtest');

