<?php

namespace App\Http\Controllers;

use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransactionController extends Controller
{
    public function index(){
        $transactionProducts = Transaction::where('user_id', Auth::user()->id)->get();
        return view('transactionHistory',[
            'transactionItems' => $transactionProducts
        ]);
    }
}
