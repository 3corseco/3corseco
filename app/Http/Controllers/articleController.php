<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class articleController extends Controller
{
    public function index() {
        $data['carticle_listing'] =  DB::table('tbl_article')->select()->orderBy('created_at', 'DESC')->paginate(16);
        return view('articles', $data);
    }
    

    public function about() {
        return view('about');
    }
    
    public function articleRead(Request $requst, $slug){
        $data = ['title' => $slug];

        return view('detial', $data);
    }
}
