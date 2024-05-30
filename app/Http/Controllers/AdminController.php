<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    function index(){
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
    }
    function about(){
        $name = "kong ruk siam";
        $date = "7 October 2566"; 
        return view('about', compact('name', 'date'));
    }
    function create(){
        return view('form');
    }
    function insert(Request $request){
        $request->validate(
        [
         'title'=>'required|max:20',
         'content'=>'required'
        ],
        [
            'title.required'=>'enter name article please.',
            'title.max' => 'name article not should more than 20 character.',
            'content.required'=>'enter content article please.'
        ]
        );
    
    }
}
