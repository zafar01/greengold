<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Product;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create demo admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@greengold.com',
            'password' => Hash::make('password123'),
        ]);

        // Create sample products
        Product::create([
            'name' => 'Organic Green Tea',
            'description' => 'Premium organic green tea leaves sourced from sustainable farms. Rich in antioxidants and natural flavors.',
            'price' => 24.99,
            'quantity' => 50,
            'status' => 'active',
        ]);

        Product::create([
            'name' => 'Natural Honey',
            'description' => 'Pure, raw honey collected from local beehives. No additives or preservatives.',
            'price' => 18.50,
            'quantity' => 30,
            'status' => 'active',
        ]);

        Product::create([
            'name' => 'Herbal Supplements',
            'description' => 'Natural herbal supplements for wellness and vitality. Made from carefully selected herbs.',
            'price' => 32.99,
            'quantity' => 25,
            'status' => 'active',
        ]);

        Product::create([
            'name' => 'Essential Oils Set',
            'description' => 'Collection of pure essential oils for aromatherapy and natural healing.',
            'price' => 45.00,
            'quantity' => 15,
            'status' => 'inactive',
        ]);

        // Seed FAQs
        $this->call([
            \Database\Seeders\FAQSeeder::class
        ]);

        // Seed Blogs
        $this->call([
            \Database\Seeders\BlogSeeder::class
        ]);
    }
}
