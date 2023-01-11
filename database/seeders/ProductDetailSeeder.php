<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class ProductDetailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $table->id();
        //     $table->foreignId('product_id')->constrained();
        //     $table->integer('size');
        //     $table->string('color');
        //     $table->integer('quantity');
        //     $table->timestamps();
        
        $products = Product::all();

        foreach ($products as $p) {
            DB::table('product_details')->insert([
                [
                    'product_id' => $p->id,
                    'size' => '39',
                    'color' => 'black',
                ],
                [
                    'product_id' => $p->id,
                    'size' => '40',
                    'color' => 'black',
                ],
                [
                    'product_id' => $p->id,
                    'size' => '41',
                    'color' => 'black',
                ],
                [
                    'product_id' => $p->id,
                    'size' => '42',
                    'color' => 'black',
                ],
                [
                    'product_id' => $p->id,
                    'size' => '43',
                    'color' => 'black',
                ],
                [
                    'product_id' =>$p->id,
                    'size' => '44',
                    'color' => 'black',
                ],
                // black
                [
                    'product_id' => $p->id,
                    'size' => '39',
                    'color' => 'red',
                ],
                [
                    'product_id' => $p->id,
                    'size' => '40',
                    'color' => 'red',
                ],
                [
                    'product_id' => $p->id,
                    'size' => '41',
                    'color' => 'red',
                ],
                [
                    'product_id' => $p->id,
                    'size' => '42',
                    'color' => 'red',
                ],
                [
                    'product_id' => $p->id,
                    'size' => '43',
                    'color' => 'red',
                ],
                [
                    'product_id' => $p->id,
                    'size' => '44',
                    'color' => 'red',
                ],
                //red
                [
                    'product_id' => $p->id,
                    'size' => '39',
                    'color' => 'white',
                ],
                [
                    'product_id' => $p->id,
                    'size' => '40',
                    'color' => 'white',
                ],
                [
                    'product_id' => $p->id,
                    'size' => '41',
                    'color' => 'white',
                ],
                [
                    'product_id' => $p->id,
                    'size' => '42',
                    'color' => 'white',
                ],
                [
                    'product_id' => $p->id,
                    'size' => '43',
                    'color' => 'white',
                ],
                [
                    'product_id' => $p->id,
                    'size' => '44',
                    'color' => 'white',
                ]
                //white
            ]);
            
        }


    
    }
}
