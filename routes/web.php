<?php

use Illuminate\Support\Facades\Route;


Route::get('/product', function () {
    return view('product');
})->middleware('auth');;

Route::get('/profile', function () {
    return view('profile');
})->middleware('auth');;

Route::get('/start', function () {
    return view('start');
})->middleware('auth');

Auth::routes();

//Route::get('/reg', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    return view('start');
});

Route::get('/', function () {
    return view('home');
});

Route::get('admin', function () {
    return view('api/get_users');
});
