<?php

namespace Database\Seeders;

use App\Models\{User, Account, Transaction, Category, Product};

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Account::factory(10)->create();
        Transaction::factory(10)->create();
        Category::factory(10)->create();
        Product::factory(10)->create();


        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}