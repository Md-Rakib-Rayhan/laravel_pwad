<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // For ProductSeeder.php__-____-__-__
        // for($i=0;$i<21;$i++){
        //     $this->call([ProductSeeder::class]);
        // }
        

         \App\Models\Product::factory(10)->create(); // for ProductFactory.php
        //  \App\Models\Category::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
