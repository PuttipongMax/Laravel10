<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    // return "<a href='admin/user/kong'>Adim</a>";
    // return "<a href='".route('admin')."'>Login</a>";
});

Route::get('about', function() {
    return view('about');
});

Route::get('blog', function(){
    return view('blog');
});

Route::get('blog/{name}', function($name){
    return "<h1>บทความ ${name}</h1>";
});

// Route::get('admin/user/kong', function(){
//     return "<h1>Welcome to Admin!</h1>";
// })->name('admin');

Route::fallback(function(){
 return "<h1>ไม่พบหน้าเว็บ</h1>";
});