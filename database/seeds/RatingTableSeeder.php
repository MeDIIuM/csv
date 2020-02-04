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
        $products = DB::table('Products')->get();
        $users = DB::table('Users')->get();
        $numOfProducts = count($products);
        $numOfUsers = count($users);
        $count_rating = [];
        while ((count($count_rating) < $numOfProducts) && (count($count_rating) < $numOfUsers)) {
            DB::table('rating')->insert([
                "rating" => random_int(0, 10),
                "id_product" => random_int(0, 50),
                "id_review" => random_int(0, 50),
                "id_user" => random_int(0, 50)
            ]);
        }
    }
}
