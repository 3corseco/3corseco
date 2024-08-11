<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class productController extends Controller
{
    public function __construct()
    {
        $this->shareCategories();
    }

    protected function shareCategories()
    {
        // Fetch categories
        $product_cate = DB::table('tbl_product_categories')
            ->orderBy('name_en')
            ->get();

        // Share with all views
        view()->share('product_cate', $product_cate);
    }

    public function index(Request $request)
    {
        $product_slug = "product list";
        if ($request->has('by')) {
            $product_slug = $request->input("by");
            $category_id = $this->getCategoryID($product_slug);

            if ($category_id) {
                $data['product_list'] = DB::table('tbl_products')
                    ->where('category_id', $category_id)
                    ->orderBy('created_at', 'DESC')
                    ->get();
            } else {
                $data['product_list'] = collect();
            }
        } else {
            $data['product_list'] = DB::table('tbl_products')
                ->orderBy('created_at', 'DESC')
                ->get();
        }

        $data['title'] = $product_slug;

        return view("products", $data);
    }

    private function getCategoryID($slug)
    {
        $category = DB::table('tbl_product_categories')
            ->where('slug', $slug)
            ->select('id')
            ->first();

        return $category ? $category->id : null;
    }
    

    public function productView($slug){

      $data['product'] = DB::table("tbl_")->where('product_slug', $slug)->get();
      $data['title'] = $data['product']->title;
      return  view('');

    }
    
}
