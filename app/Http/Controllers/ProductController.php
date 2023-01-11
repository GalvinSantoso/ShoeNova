<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Model\Product_detail;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    function index(){
        $categories = Category::all();
        $products = Product::search()->paginate(6);
        return view('shop',compact('categories','products'));
    }

    // function detail(Request $request,int $id){{{  }}{{  }}
    //     $products = Product::find($id);
    //     // $colors = Product_detail::where('product_id', $id)->select('color')->distinct();
    //     $sizes = DB::table('product_details')
    //     ->select('product_details.size')
    //     ->where('product_details.product_id', $id)
    //     ->distinct()
    //     ->get();


    //     $colors = DB::table('product_details')
    //     ->select('product_details.color')
    //     ->where('product_details.product_id', $id)
    //     ->distinct()
    //     ->get();
        
    //     return view('detail', compact('products', 'colors', 'sizes'));
    // }
    // function search(Request $req){
    //     $data = Product::where('name', 'like', '%'.$req->input('quer'))
    // }

    function detail($id){
        $products = Product::find($id);
        // $colors = Product_detail::where('product_id', $id)->select('color')->distinct();
        $sizes = DB::table('product_details')
        ->select('product_details.size')
        ->join('products','product_details.product_id', '=', 'products.id')
        ->where('product_details.product_id', $id)
        ->distinct()
        ->get();

        $colors = DB::table('product_details')
        ->select('product_details.color')
        ->join('products','product_details.product_id', '=', 'products.id')
        ->where('product_details.product_id', $id)
        ->distinct()
        ->get();
        
        return view('detail', compact('products', 'colors', 'sizes'));
    }

    function category(int $category_id){
        $categories = Category::all();
        $products = Product::where('category_id','=',$category_id)->paginate(6);
        
        return view('shop', compact('categories','products'));
    }

}
