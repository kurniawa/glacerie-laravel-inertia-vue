<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Gelato', 'localname' => 'Gelato', 'slug' => 'gelato', 'description' => 'Italian style ice cream made with natural ingredients.'],
            ['name' => 'Pastry', 'localname' => 'Kue', 'slug' => 'pastry', 'description' => 'Various kinds of pastries and baked goods.'],
        ];
        $products = [
            ['category_slug' => 'gelato', 'shortname' => 'Gianduja', 'name' => 'Gianduja (Chocolate Hazelnut)', 'slug' => 'classic-vanilla-gelato', 'price' => 50000, 'unit' => 'cup', 'status' => 'ready', 'description' => 'Creamy vanilla gelato made with real vanilla beans.'],
            ['category_slug' => 'gelato', 'name' => 'Rich Chocolate Gelato', 'slug' => 'rich-chocolate-gelato', 'price' => 55000, 'unit' => 'cup', 'status' => 'ready', 'description' => 'Decadent chocolate gelato for chocolate lovers.'],
            ['category_slug' => 'pastry', 'name' => 'Butter Croissant', 'slug' => 'butter-croissant', 'price' => 30000, 'unit' => 'piece', 'status' => 'ready', 'description' => 'Flaky and buttery croissant made fresh daily.'],
            ['category_slug' => 'pastry', 'name' => 'Blueberry Muffin', 'slug' => 'blueberry-muffin', 'price' => 25000, 'unit' => 'piece', 'status' => 'ready', 'description' => 'Moist muffin filled with fresh blueberries.'],
        ];
    }
}
