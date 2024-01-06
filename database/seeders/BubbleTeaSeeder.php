<?php
// database/seeders/BubbleTeaSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class BubbleTeaSeeder extends Seeder
{
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('bubble_teas')->truncate();

        DB::statement('SET FOREIGN_KEY_CHECKS=1');

        DB::table('bubble_teas')->insert([
            [
                'name' => 'TropiCraze Delight',
                'description' => 'An exotic blend of tropical fruits with tapioca pearls for an explosion of flavors. Ingredients : Mango, pineapple, passion fruit, tapioca pearls.',
                'price' => 4.99,
                'image_path' => 'images/bubble1.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Zen Bliss Brew',
                'description' => 'A soothing infusion of green tea, jasmine, and flavor pearls, perfect for relaxation. Ingredients : Green tea, jasmine flowers, tapioca pearls.',
                'price' =>  5.49,
                'image_path' => 'images/bubble2.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Choco-Berry Burst',
                'description' => 'A chocolatey delight mixed with fresh berries and tapioca pearls for a sweet experience. Ingredients : Chocolate, strawberries, blueberries, tapioca pearls.',
                'price' => 5.99,
                'image_path' => 'images/bubble3.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Minty Marvel Fusion',
                'description' => 'A refreshing combination of fresh mint, milk, and tapioca pearls for a invigorating drink. Ingredients : Mint, milk, tapioca pearls.',
                'price' => 6.49,
                'image_path' => 'images/bubble4.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Caramel Dream Delight',
                'description' => 'A velvety blend of sweet caramel, strong coffee, and tapioca pearls for those who love rich flavors. Ingredients : Caramel, coffee, tapioca pearls.',
                'price' => 6.99,
                'image_path' => 'images/bubble5.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'name' => 'Berry Burst Breeze',
                'description' => 'An explosion of fresh mixed berries with yogurt and tapioca pearls for a light and delicious beverage. Ingredients : Mixed berries, yogurt, tapioca pearls.',
                'price' => 5.79,
                'image_path' => 'images/bubble6.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ]);
    }
}
