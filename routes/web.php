<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/about', function() {
    return "<h1>เกี่ยวกับเรา</h1>";
});

Route::get('blog', function(){
    return "<h1>บทความทั้งหมด</h1>";
});

Route::Get('/blog/{name}', function($name){
    return "<h1>บทความ ${name}</h1>";
});