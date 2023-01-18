<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Transaction;

use App\Models\TransactionProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index(){
        $transactionProducts = Transaction::where('user_id', Auth::user()->id)->orderBy('created_at')->get()->groupBy(function($product) {
            return $product->created_at->format('Y-m-d H:i');
       });
        return view('history',[
            'transactionProducts' => $transactionProducts
        ]);
    }

    public function checkOut(Request $req){
        $cartItems = Cart::where('user_id', $req->user_id)->get();
         foreach ($cartItems as $cartItem) {
            Transaction::create([
                'user_id' => $req->user_id,
                'quantity' => $cartItem->quantity,
                'size' => $cartItem->size,
                'color' => $cartItem->color
            ]);
            TransactionProduct::create([
                'transaction_id' => $cartItem->id,
                'product_id' => $cartItem->product_id,
            ]);
            Cart::destroy($cartItem->id);
        }
        return redirect('/transactionHistory');
    }
}
