<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    public function index(Request $request){
        
        
        return view('front.index.index',[]);
    }
    
    public function add(Request $request){
        
    }
}
