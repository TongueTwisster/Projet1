<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            "name"=>"Samsung Galaxy S10",
            "description"=>"128GB of storage, 6.1-inch AMOLED panel 3,040 x 1,440, 8GB of RAM, 8nm octa-core Exynos 9820",
            "category"=>"Smartphone",
            "gallery"=>"",
            "price"=>"600 $ CAD",
        ]);
    }
}
