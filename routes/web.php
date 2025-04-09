<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\play;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');
Route::get('/enter_form',[play::class,'start_app']);
Route::POST('/enter_form',[play::class,'login'])->name('login');
Route::get('/account',[play::class,'panel'])->name('pp');
Route::get('/karamoozi_form',[play::class,'karamoozi_page'])->name('karamoozi');
Route::POST('/karamoozi_form',[play::class,'karamoozi_validation'])->name('valid_karamoozi');
Route::get('/error',function(){
    return view('error');
})->name('error');
Route::get('/error2',function(){
    return view('error2');
})->name('error2');
Route::get('/profile',[play::class,'show_data'])->name('show_data');
Route::get('/welcome',[play::class,'logout'])->name('logout');
