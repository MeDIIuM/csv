<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     * @throws Exception
     */
    public function run()
    {
        $names = ['Вася', 'Петя', 'Дима', 'Коля', 'Егор'];
        $surname = ['Иванов', 'Петров', 'Сидоров', 'Васечкин', 'Русаков'];
        $cities = ['Волгоград', 'Самара', 'Саратов', 'Москва', 'Астрахань'];
        for ($i = 0; $i < 50; $i++) {
            DB::table('Users')->insert([
                'name' => $names[array_rand($names, 1)],
                'surname' => $surname[array_rand($surname, 1)],
                'city' => "улица " . $cities[array_rand($cities, 1)] . ' дом ' . random_int(1, 50),
            ]);
        }
    }
}
