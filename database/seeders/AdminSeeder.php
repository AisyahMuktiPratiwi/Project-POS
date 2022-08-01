<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name_category' => 'Baju Wanita',
            ],
            [
                'name_category' => 'Baju Pria',
            ],
            [
                'name_category' => 'Celana',
            ],
        ];
        $products = [
            [
                'name_product' => 'Jizy Blouse',
                'description' => 'Blouse kekinian',
                'stock' => 30,
                'price' => 50000,
                'picture' => '1.jpeg',
                'category_id' => 1

            ],

            [
                'name_product' => 'Kemeja Kurta',
                'description' => 'Kemeja kekinian',
                'stock' => 20,
                'price' => 60000,
                'picture' => '3.jpeg',
                'category_id' => 2

            ],

            [
                'name_product' => 'Celana Cupachino',
                'description' => 'Celana Bahan',
                'stock' => 10,
                'price' => 50000,
                'picture' => '4.jpeg',
                'category_id' => 3

            ],
        ];
        foreach ($products as $products) {
            Product::create($products);
        }

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
