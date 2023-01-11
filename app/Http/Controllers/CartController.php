<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    //
    function addToCart(Request $req){

        if($req->session()->has('user')){
            DB::table('cart')->insert([
                'user_id' => $req->session()->get('user')['id'],
                'product_id' => $req->product_id,
                'quantity' => $req->quantity,
                'color' => $req->color,
                'size' => $req->size
            ]);
            return redirect("/shop");
        }else{
            return redirect("/login");
        }
    }

    static function cartItem(){
        $userId=Session::get('user')['id'];
        return Cart::where('user_id',$userId)->count();
    }

   

    function cartList(){

        $userId=Session::get('user')['id'];
        $products= DB::table('cart')
        ->join('products','cart.product_id','=','products.id')
        ->where('cart.user_id',$userId)
        ->select('products.*','cart.id as cart_id','quantity')
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
