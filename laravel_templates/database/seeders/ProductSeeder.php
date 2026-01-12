<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;



class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            'categories_id'=>rand(1,100),
            'name' => Str::random(10),
            'description' => Str::random(50),
            'sku' =>Str::random(10),
            'stock' => rand(1,10),
            'price' => rand(160.00,10000.00),
            'image' => 'product_image/noimage.jpg',
            
        ]);
    }
}
