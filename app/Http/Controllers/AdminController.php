<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function addProduct(){
        $categories = Category::all();
        return view('addItem',compact('categories'));
    }

    public function store(Request $request){
        $request->validate([
            'name' => 'required|unique:products',
            'price' => 'required|integer',
            'detail' => 'required',
            'photo' => 'required|image|mimes:jpg,jpeg,png',
            'category_id' => 'required'
        ]);
        $file = $request->file('photo');
        $name = $file->getClientOriginalName();
        $tujuan_upload = 'storage/'. $name;
		$file->move('storage',$tujuan_upload,$file);

        DB::table('products')->insert([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'detail' => $request->detail,
            'price' => $request->price,
            'photo' => $tujuan_upload
        ]);
        return redirect('/manage')->with('success', 'Product has been added!');
    }

    public function manage(){
        $categories = Category::all();
        $products = Product::all();

        return view('manageProduct',compact('categories','products'));
    }
    
    public function updateProduct(int $product_id){
        $categories = Category::all();
        $product = Product::where('id','=',$product_id)->get()->first();

        return view('updateProduct',compact('categories','product'));
    }

    public function updateProductAction(Request $request, int $product_id){
      
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'detail' => 'required',
            'price' => 'required|integer',
            'photo' => 'required|image|mimes:jpg,jpeg,png',
        ]);

        $file = $request->file('photo');
        $name = $file->getClientOriginalName();
        $tujuan_upload = 'storage/'. $name;
		$file->move('storage',$tujuan_upload,$file);

        DB::table('products')->where('id','=',$product_id)->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'detail' => $request->detail,
            'price' => $request->price,
            'photo' => $tujuan_upload
        ]);

        return redirect()->route('manage')->with('updateSuccess','product information updated');
    }

    public function deleteProduct(int $product_id){

        DB::table('products')->where('id','=',$product_id)->delete();

        return redirect()->route('manage')->with('deleteSuccess','a product has been deleted');
    }
}
