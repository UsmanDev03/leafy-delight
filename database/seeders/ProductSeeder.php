<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Facades\Storage;
use Faker\Factory as Faker;

class ProductSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            Product::create([
                'sec1_title' => $faker->sentence(3),
                'sec1_del_price' => $faker->randomFloat(2, 10, 100) . '$',
                'sec1_price' => $faker->randomFloat(2, 5, 90) . '$',
                'sec1_desc' => $faker->paragraph(4),
                'sec2_available_stock' => $faker->numberBetween(1, 100),
                'sec2_category' => $faker->word(),
                'sec2_tags' => implode('/', $faker->words(3)),
                'sec3_img1' => 'products/dummy1.jpg',
                'sec3_img2' => 'products/dummy2.jpg',
                'sec3_img3' => 'products/dummy3.jpg',
            ]);
        }
    }
}
