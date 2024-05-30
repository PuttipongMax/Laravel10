<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
    // return "<a href='admin/user/kong'>Adim</a>";
    // return "<a href='".route('admin')."'>Login</a>";
});

Route::get('about', function() {
    $name = "kong ruk siam";
    $date = "7 October 2566"; 
    return view('about', compact('name', 'date'));
})->name('about');

Route::get('blog', function(){
    $blogs = [
     [  
        'title'=>'article 1',
        'content'=>'article content 1',
        'status'=>true
     ],
     [  
        'title'=>'article 2',
        'content'=>'article content 2',
        'status'=>true
     ],
     [  
        'title'=>'article 3',
        'content'=>'article content 3',
        'status'=>false
     ],
     [  
        'title'=>'article 4',
        'content'=>'article content 4',
        'status'=>true
     ],
     [  
        'title'=>'article 5',
        'content'=>'article content 5',
        'status'=>true
     ],
    ];
    return view('blog', compact('blogs'));
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