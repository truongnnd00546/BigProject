<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        \Illuminate\Support\Facades\DB::table('categories')->truncate();
        \Illuminate\Support\Facades\DB::table('categories')->insert([
            [
                'name' => 'Áo đi biển',
                'description' => 'Các mẫu áo đi biển đẹp',
                'thumbnail' => 'https://cdn.shopify.com/s/files/1/0476/6585/products/404000047_WHT_1_copy_large.jpg?v=1518653848',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'name' => 'Quần đi biển',
                'description' => 'Các mẫu quần đi biển đẹp',
                'thumbnail' => 'https://cdn.shopify.com/s/files/1/0476/6585/products/315200034_CAVIAR-1_large.jpg?v=1532045768',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'name' => 'Kính đi biển',
                'description' => 'Các mẫu kính đi biển đẹp',
                'thumbnail' => 'https://image.ebdcdn.com/image/upload/c_fill,e_sharpen:70,f_auto,h_180,q_auto:good,w_360/v1/product/front/white/pm0353.jpg',
                'c  reated_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'name' => 'Mũ đi biển',
                'description' => 'Các mẫu mũ đi biển đẹp',
                'thumbnail' => 'https://xenboutique.com/wp-content/uploads/2017/05/non-di-bien-3-14-600x600.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ],
            [
                'name' => 'Dép đi biển',
                'description' => 'Các mẫu dép đi biển đẹp',
                'thumbnail' => 'http://product.hstatic.net/1000171212/product/dl09-2_grande.jpg',
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
                'status' => 1
            ]
        ]);
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS = 1');
    }
}
