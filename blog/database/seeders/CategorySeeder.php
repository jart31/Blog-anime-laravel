<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = ['Shonen', 'Shojo', 'Seinen', 'Josei', 'Isekai', 'Mecha', 'Slice of Life', 'Fantasía', 'Horror', 'Aventura'];

        foreach ($categories as $categoryName) {
            Category::create([
                'name' => $categoryName
            ]);
        }
    }
}
