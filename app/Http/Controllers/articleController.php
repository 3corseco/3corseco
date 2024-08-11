<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class articleController extends Controller
{
    public function index(Request $request) {
        $category_name = $request->input('category');
        $keyword = $request->input('keyword');
    
        // Get categories for filtering options
        $data['categories'] = DB::table('tbl_categories')->orderBy('created_at', 'DESC')->get();
        $oncategory = 'all';
    
        // Start building the query
        $query = DB::table('tbl_article')->orderBy('created_at', 'DESC');
    
        // Filter by category if specified
        if ($category_name) {
            $category_id = $this->getCategoryIdByName($category_name);
            $oncategory = $category_name;
            $query->where('category_id', 'LIKE', '%"'.$category_id.'"%'); // Match the serialized format
        }
    
        // Filter by keyword if specified
        if ($keyword) {
            $query->whereRaw('JSON_CONTAINS(keywords, ?)', [json_encode($keyword)]);
        }
    
        // Paginate results
        $data['carticle_listing'] = $query->paginate(16);
    
        $data['oncategory'] = $oncategory;
        $data['title'] = 'article' . ($category_name ? ' | ' . $category_name : '') . ($keyword ? ' | ' . $keyword : '');
        return view('articles', $data);
    }
    
    private function getCategoryIdByName($category_name) {
        return DB::table('tbl_categories')
            ->where('slug', $category_name)
            ->value('id'); // Fetches the category ID
    }

   


    public function about() {
        return view('about');
    }
    
    public function articleRead(Request $requst, $slug){
        $data = ['title' => $slug];
        $data['article_reading'] = DB::table('tbl_article')->where('article_slug', $slug)->first();
        $data['categories'] = DB::table('tbl_categories')->orderBy('created_at', 'DESC')->get();
        return view('detial', $data);
    }

}
