<?php

namespace Database\Seeders;

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
        DB::table('product_details')->insert([
            [
                'product_id' => '2',
                'size' => '39',
                'color' => 'black',
                'quantity' => '15',
            ],
            [
                'product_id' => '2',
                'size' => '40',
                'color' => 'black',
                'quantity' => '5',
            ],
            [
                'product_id' => '2',
                'size' => '41',
                'color' => 'black',
                'quantity' => '10',
            ],
            [
                'product_id' => '2',
                'size' => '42',
                'color' => 'black',
                'quantity' => '5',
            ],
            [
                'product_id' => '2',
                'size' => '43',
                'color' => 'black',
                'quantity' => '5',
            ],
            [
                'product_id' => '2',
                'size' => '44',
                'color' => 'black',
                'quantity' => '5',
            ],
            // black
            [
                'product_id' => '2',
                'size' => '39',
                'color' => 'red',
                'quantity' => '15',
            ],
            [
                'product_id' => '2',
                'size' => '40',
                'color' => 'red',
                'quantity' => '5',
            ],
            [
                'product_id' => '2',
                'size' => '41',
                'color' => 'red',
                'quantity' => '10',
            ],
            [
                'product_id' => '2',
                'size' => '42',
                'color' => 'red',
                'quantity' => '5',
            ],
            [
                'product_id' => '2',
                'size' => '43',
                'color' => 'red',
                'quantity' => '5',
            ],
            [
                'product_id' => '2',
                'size' => '44',
                'color' => 'red',
                'quantity' => '5',
            ],
            //red
            [
                'product_id' => '2',
                'size' => '39',
                'color' => 'white',
                'quantity' => '15',
            ],
            [
                'product_id' => '2',
                'size' => '40',
                'color' => 'white',
                'quantity' => '5',
            ],
            [
                'product_id' => '2',
                'size' => '41',
                'color' => 'white',
                'quantity' => '10',
            ],
            [
                'product_id' => '2',
                'size' => '42',
                'color' => 'white',
                'quantity' => '5',
            ],
            [
                'product_id' => '2',
                'size' => '43',
                'color' => 'white',
                'quantity' => '5',
            ],
            [
                'product_id' => '2',
                'size' => '44',
                'color' => 'white',
                'quantity' => '5',
            ]
            //white
        ]);

    
    }
}
