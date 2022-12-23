<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use App\Models\Product_detail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ProductController extends Controller
{
    function index(){
        $data = Product::all();

        return view('shop',['products' => $data]);
    }

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
    // function search(Request $req){
    //     $data = Product::where('name', 'like', '%'.$req->input('quer'))
    // }

    function addToCart(Request $req){

        if($req->session()->has('user')){
            $cart = new Cart;
            $cart->user_id=$req->session()->get('user')['id'];
            $cart->product_id=$req->product_id;
            $cart->save();
            return redirect("/");


        }else{
            return redirect("/login");
        }
    }

    static function cartItem(){
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

    // function cartList(){

    //     $userId=Session::get('user')['id'];
    //     $products= DB::table('cart')
    //     ->join('products','cart.product_id','=','products.id')
    //     ->where('cart.user_id',$userId)
    //     ->select('products.*','cart.id as cart_id')
    //     ->get();

     

    //     return view('cartlist',['products'=>$products],['total'=>$total]);
    // }

    function cartList(){

        $userId=Session::get('user')['id'];
        $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id')
        ->get();
        if($products->isNotEmpty()){
            $price = [];
            foreach ($products as $item) {
                $prices[] = $item->price;
            }
            $total = array_sum($prices);
            return view('cartlist', compact('products', 'total'));
        } else{
            return view('cartlist', compact('products'));
        }
    }

    function removeCart($id){
        Cart::destroy($id);
        return redirect('cartlist');
    }
}
