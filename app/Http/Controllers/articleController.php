<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class articleController extends Controller
{
    public function index() {
        return view('articles');
    }
    public function about() {
        return view('about');
    }
    
    public function articleRead(Request $requst, $slug){
        $data = ['title' => $slug];
        return view('detial', $data);
    }
}
