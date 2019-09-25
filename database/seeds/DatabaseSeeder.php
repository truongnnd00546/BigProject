<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoriesTableSeeder::class);
        $this->call(CollectionsTableSeeder::class);
        $this->call(ProductsTableSeeder::class);
        $this->call(OrderTableSeeder::class);
        $this->call(OrderDetailsTableSeeder::class);
    }
}
