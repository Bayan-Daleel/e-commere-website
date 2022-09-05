<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'admin',
            'username'=>'admin1',
            'email' => 'admin@gmail.com',
             'password'=>bcrypt('123456789'),
             'is_admin'=>'1'
         ]);

        Category::factory(5)->create();
        Product::factory(50)->create(
            ['photo'=>'202209032054slider-img.png']
        );

    }
}
