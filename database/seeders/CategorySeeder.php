<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('categories')->insert([
            'name' => 'Lifestyle'
        ]);

        DB::table('categories')->insert([
            'name' => 'Sport Shoes'
        ]);

        DB::table('categories')->insert([
            'name' => 'Running'
        ]);

        DB::table('categories')->insert([
            'name' => 'Jordan'
        ]);

        DB::table('categories')->insert([
            'name' => 'Walking'
        ]);

        DB::table('categories')->insert([
            'name' => 'Soccer'
        ]);

        DB::table('categories')->insert([
            'name' => 'Kids'
        ]);
    }
}
