<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Models\User;

Route::get('/', function () {
    return view('index',['blog_title'=>'Home']);
});

route::get('/dashboard', function(){
    return view('dashboard',['blog_title'=>'dashboard']);
})->name('dashboard')->middleware('auth');

route::get('/kontak', function(){
    return view('kontak',['blog_title'=>'kontak']);
})->name('kontak');

route::get('/kerja', function(){
    return view('menu.kerja',['blog_title'=>'kerja']);
})->name('kerja');

route::get('/kuliah',function(){
    return view('menu.kuliah.index',['blog_title'=>'kuliah']);
})->name('kuliah');

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');
route::get('/register', [RegisterController::class,'index'])->name('register');
route::post('/register',[RegisterController::class,'store']);

route::view('/pendidikan','menu.pendidikan.index')->name('pendidikan');
route::view('/pendidikan/tk','menu.pendidikan.tk')->name('tk');
route::view('/pendidikan/mi','menu.pendidikan.mi')->name('mi');
route::view('/pendidikan/mts','menu.pendidikan.mts')->name('mts');
route::view('/pendidikan/ma','menu.pendidikan.ma')->name('ma');
route::view('/w','template.layar');