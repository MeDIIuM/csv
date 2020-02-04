<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        $products = DB::table('Product')->get();
        $users = DB::table('User')->get();
        $numOfProducts = count($products);
        $numOfUsers = count($users);
        $count_reviews = [];
        $text = ['товар','очень','хороший','рекомендую','класс','уровень','настоящий','не китай','достойный','оценил','отличный'];
        while ((count($count_reviews) < $numOfProducts) && (count($count_reviews) < $numOfUsers)) {
            DB::table('review')->insert([
                "review" =>$text[array_rand($text, 4)](),
                "likes" => random_int(0, 999),
                "id_product" => random_int(0, 50),
                "id_review" => random_int(0, 50),
                "id_user" => random_int(0, 50)
            ]);
        }
    }
}
