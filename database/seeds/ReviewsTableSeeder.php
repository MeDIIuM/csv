<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
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
        $count_reviews = 0;
        $text = ['товар','очень','хороший','рекомендую','класс','уровень','настоящий','не китай','достойный','оценил','отличный'];
        while (($count_reviews < $numOfProducts) && ($count_reviews < $numOfUsers)) {
            DB::table('reviews')->insert([
                "review" =>$text[array_rand($text, 1)],
                "likes" => random_int(0, 50),
                "product_id" => random_int(0, 50),
                "rating_id" => random_int(0, 50),
                "user_id" => random_int(0, 50)
            ]);
            $count_reviews++;
        }

    }
}
