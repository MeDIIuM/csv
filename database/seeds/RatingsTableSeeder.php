<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RatingTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        $products = DB::table('products')->get();
        $users = DB::table('users')->get();
        $numOfProducts = count($products);
        $numOfUsers = count($users);
        $count_rating = 0;
        while (($count_rating < $numOfProducts) && ($count_rating < $numOfUsers)) {
            DB::table('ratings')->insert([
                "rating" => random_int(0, 10),
                "product_id" => random_int(0, 50),
                "review_id" => random_int(0, 50),
                "user_id" => random_int(0, 50)
            ]);
            $count_rating++;
        }

    }
}
