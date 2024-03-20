<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Sambutan;

Route::get('/', function () {
    return view('index');
});

route::get('/kontak', function(){
    return view('kontak');
})->name('kontak');

route::get('/kerja', function(){
    return view('menu.kerja');
})->name('kerja');

route::view('/pendidikan','menu.pendidikan.index')->name('pendidikan');
route::view('/pendidikan/tk','menu.pendidikan.tk')->name('tk');
route::view('/pendidikan/mi','menu.pendidikan.mi')->name('mi');
route::view('/pendidikan/mts','menu.pendidikan.mts')->name('mts');
route::view('/pendidikan/ma','menu.pendidikan.ma')->name('ma');
route::view('/w','template.layar');