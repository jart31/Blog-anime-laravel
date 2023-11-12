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
        \App\Models\User::factory()->create([
            'name' => 'jart',
            'email' => 'jaime@gmail.com',
            'password' => bcrypt('1234asdf'),
            'is_admin' => 0
        ]);
        \App\Models\User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('1234asdf'), // Aunque ya está definido en el factory, lo reiteramos para claridad
            'is_admin' => 1
        ]);

        $this->call(CategorySeeder::class);
        $this->call(PostSeeder::class);



    }
}
