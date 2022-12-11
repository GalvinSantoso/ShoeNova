<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class productSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

        DB::table('products')->insert([
            'category_id' => '3',
            'name' => 'nike free run 5',
            'price' => 100,
            'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, facere nesciunt quos provident est cumque consectetur voluptate, labore assumenda nihil eius sint, in quod hic. Inventore odio iste id beatae!',
            'photo' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/e6f53694-5e9d-4241-9591-bbd0d1030d8c/free-run-5-road-running-shoes-m8L9mr.png'
        ]);

    }
}
