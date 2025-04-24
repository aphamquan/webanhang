<?php

use Illuminate\Support\Facades\Route;
/* duohg dan vao controllers*/
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    $str = "kinh chuc van su binh an";
    $t = "chao quy khach!";
    return view('home',['title'=>$t, 'home'=>$str]);
});

Route::get('/cong/{a}/{b}',[HomeController::class,'cong2so']);

Route::get('/dangnhap',[UsersController::class,'dangnhap']);
Route::get('/dangky',[UsersController::class,'dangky']);
Route::get('/doipass',[UsersController::class,'doipass']);


Route::get('/', function () {
    return view('home');
});
Route::get('/sp/{id}', function ($id=0) {
    return view('spdetail',['id'=>$id]);
});
Route::get('/loai/{id}', function ($id=0) {
    return view('spnoibat',['id'=>$id]);
});