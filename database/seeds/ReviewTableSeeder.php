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
        $products = DB::table('Products')->get();
        $users = DB::table('Users')->get();
        $numOfProducts = count($products);
        $numOfUsers = count($users);
        $count_reviews = 0;
        $text = ['товар','очень','хороший','рекомендую','класс','уровень','настоящий','не китай','достойный','оценил','отличный'];
        while (($count_reviews < $numOfProducts) && ($count_reviews < $numOfUsers)) {
            DB::table('ReviewController')->insert([
                "review" =>$text[array_rand($text, 1)],
                "likes" => random_int(0, 50),
                "id_product" => random_int(0, 50),
                "id_rating" => random_int(0, 50),
                "id_user" => random_int(0, 50)
            ]);
            $count_reviews++;
        }

    }
}
