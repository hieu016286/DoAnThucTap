<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
                'id' => 1,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'Pure Pineapple',
                'description' => 'Lorem ipsum dolor sit amet, consectetur ing elit, sed do eiusmod tempor sum dolor sit amet, consectetur adipisicing elit, sed do mod tempor',
                'content' => '',
                'price' => 629.99,
                'qty' => 20,
                'discount' => 495,
                'weight' => 1.3,
                'sku' => '00012',
                'featured' => true,
                'tag' => 'Clothing',
            ],
            [
                'id' => 2,
                'brand_id' => 2,
                'product_category_id' => 2,
                'name' => 'Guangzhou sweater',
                'description' => null,
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 13,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Clothing',
            ],
            [
                'id' => 3,
                'brand_id' => 3,
                'product_category_id' => 2,
                'name' => 'Guangzhou sweater',
                'description' => null,
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Clothing',
            ],
            [
                'id' => 4,
                'brand_id' => 4,
                'product_category_id' => 1,
                'name' => 'Microfiber Wool Scarf',
                'description' => null,
                'content' => null,
                'price' => 64,
                'qty' => 20,
                'discount' => 35,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Accessories',
            ],
            [
                'id' => 5,
                'brand_id' => 1,
                'product_category_id' => 3,
                'name' => "Men's Painted Hat",
                'description' => null,
                'content' => null,
                'price' => 44,
                'qty' => 20,
                'discount' => 35,
                'weight' => null,
                'sku' => null,
                'featured' => false,
                'tag' => 'Accessories',
            ],
            [
                'id' => 6,
                'brand_id' => 1,
                'product_category_id' => 2,
                'name' => 'Converse Shoes',
                'description' => null,
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Clothing',
            ],
            [
                'id' => 7,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'Pure Pineapple',
                'description' => null,
                'content' => null,
                'price' => 64,
                'qty' => 20,
                'discount' => 35,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'HandBag',
            ],
            [
                'id' => 8,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => '2 Layer Windbreaker',
                'description' => null,
                'content' => null,
                'price' => 44,
                'qty' => 20,
                'discount' => 35,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Clothing',
            ],
            [
                'id' => 9,
                'brand_id' => 1,
                'product_category_id' => 1,
                'name' => 'Converse Shoes',
                'description' => null,
                'content' => null,
                'price' => 35,
                'qty' => 20,
                'discount' => 34,
                'weight' => null,
                'sku' => null,
                'featured' => true,
                'tag' => 'Shoes',
            ],
        ]);
    }
}
