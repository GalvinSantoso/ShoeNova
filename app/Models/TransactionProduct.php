<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionProduct extends Model
{
    protected $guarded = [];
    protected $table = 'product_transaction';
    use HasFactory;
}
