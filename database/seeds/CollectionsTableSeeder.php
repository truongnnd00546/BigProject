<?php

use Illuminate\Database\Seeder;

class CollectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=0');
        \Illuminate\Support\Facades\DB::table('collections')->truncate();
        \Illuminate\Support\Facades\DB::table('collections')->insert([
                [
                    'name' => 'Mùa hè',
                    'description' => 'Mùa hè đã mời gọi với những mẫu đồ bơi đầy màu sắc, những đôi sandal hở ngón mát mẻ , những bộ đồ 
                    dành cho đôi dành cho gia đình...Và bây giờ hãy tận hưởng mùa hè đi nào !
                    ',
                    'thumbnail' => 'http:////cdn.shopify.com/s/files/1/0476/6585/t/14/assets/home__tile-8.jpg?17373659371421586599',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ],
                [
                    'name' => 'Mùa đông',
                    'description' => 'Mùa thu có rất nhiều mẫu trang phục đôi đẹp và bắt mắt dành cho những đôi lứa đang yêu nhau.
                    Những mẫu thiết kế trẻ trung, tươi tắn dưới đây sẽ là những gợi ý tuyệt vời cho bạn khi muốn sắm đồ đôi cho mình và người ấy.',
                    'thumbnail' => 'http:////cdn.shopify.com/s/files/1/0476/6585/t/14/assets/home__tile-7.jpg?17373659371421586599',
                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                    'status' => 1
                ]
            ]
        );
        \Illuminate\Support\Facades\DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
