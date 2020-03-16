<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        $names = ['Носки', 'Футболка', 'Шорты', 'Бутсы', 'Кеды'];
        $products = ['600.55', '759.30', '2200', '3000', '1125.50'];
        for ($i = 0; $i < 50; $i++) {
            DB::table('products')->insert([
                'name' => $names[array_rand($names, 1)],
                'price' => $products[array_rand($products, 1)],
            ]);
        }
    }
}
