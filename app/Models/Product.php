<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $guarded =[];
    public function scopeSearch($query){
        if(request('search')){
            return $query->where('name', 'like', '%' . request('search') . '%');
        }else{
            return $query;
        }
    }
    public function category(){
        $this->belongsTo(Category::class);
    }
    public function product_detail(){
        $this->hasMany(Product_detail::class);
    }
}
