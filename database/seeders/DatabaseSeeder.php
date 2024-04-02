<?php

namespace Database\Seeders;

use App\Models\{User, Account, Transfer, Category, Product};

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(2)->create();
        Account::factory(2)->create();
        Transfer::factory(10)->create();
        Category::factory(3)->create();
        Product::factory(10)->create();


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
