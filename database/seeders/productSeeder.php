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
            [
                'category_id' => '1',
                'name' => 'Nike Free Run 5',
                'price' => 100,
                'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, facere nesciunt quos provident est cumque consectetur voluptate, labore assumenda nihil eius sint, in quod hic. Inventore odio iste id beatae!',
                'photo' => 'https://static.nike.com/a/images/c_limit,w_592,f_auto/t_product_v1/e6f53694-5e9d-4241-9591-bbd0d1030d8c/free-run-5-road-running-shoes-m8L9mr.png'
            ],
            [
                'category_id' => '2',
                'name' => 'New Balance 550',
                'price' => 200,
                'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, facere nesciunt quos provident est cumque consectetur voluptate, labore assumenda nihil eius sint, in quod hic. Inventore odio iste id beatae!',
                'photo' => 'https://cdn.shopify.com/s/files/1/0548/7362/0655/products/new-balance-550-white-green-1-1000.png?v=1644451206'
            ],
            [
                'category_id' => '1',
                'name' => 'Nike Air Force 1',
                'price' => 170,
                'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, facere nesciunt quos provident est cumque consectetur voluptate, labore assumenda nihil eius sint, in quod hic. Inventore odio iste id beatae!',
                'photo' => 'https://cf.shopee.co.id/file/298ff6f22ef399d25e77ec0404850f56'
            ],
            [
                'category_id' => '6',
                'name' => 'Nike Pegasus Turbo Next Nature',
                'price' => 110,
                'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, facere nesciunt quos provident est cumque consectetur voluptate, labore assumenda nihil eius sint, in quod hic. Inventore odio iste id beatae!',
                'photo' => 'https://static.nike.com/a/images/t_PDP_864_v1/f_auto,b_rgb:f5f5f5/420e0d21-57c5-41bf-8610-330d83376500/pegasus-turbo-next-nature-mens-road-running-shoes-pnz45r.png'
            ],
            [
                'category_id' => '2',
                'name' => 'Nike Air Max 97',
                'price' => 240,
                'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, facere nesciunt quos provident est cumque consectetur voluptate, labore assumenda nihil eius sint, in quod hic. Inventore odio iste id beatae!',
                'photo' => 'https://static.nike.com/a/images/t_PDP_1728_v1/f_auto,b_rgb:f5f5f5/4c27d2e4-2434-4f35-b063-14ac48071256/air-max-97-shoes-dDqPVj.png'
            ],
            [
                'category_id' => '1',
                'name' => 'Converse CHUCK 70 HI',
                'price' => 100,
                'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, facere nesciunt quos provident est cumque consectetur voluptate, labore assumenda nihil eius sint, in quod hic. Inventore odio iste id beatae!',
                'photo' => 'https://www.converse.id/media/catalog/product/cache/e81e4f913a1cad058ef66fea8e95c839/C/O/CON162050C-1.jpg'
            ],
            [
                'category_id' => '5',
                'name' => 'bata',
                'price' => 90,
                'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, facere nesciunt quos provident est cumque consectetur voluptate, labore assumenda nihil eius sint, in quod hic. Inventore odio iste id beatae!',
                'photo' => 'https://www.bataindustrials.co.id/wp-content/uploads/2014/01/Bora_S1.png'
            ],
            [
                'category_id' => '1',
                'name' => 'Adidas NMD S1',
                'price' => 290,
                'detail' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Tempore, facere nesciunt quos provident est cumque consectetur voluptate, labore assumenda nihil eius sint, in quod hic. Inventore odio iste id beatae!',
                'photo' => 'https://www.adidas.co.id/media/catalog/product/h/p/hp5522_sl_ecom.jpg'
            ]
        
        ]);

    }
}
