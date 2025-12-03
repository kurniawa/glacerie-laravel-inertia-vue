<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\ProductVariantEdition;
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
            ['parent_id' => null, 'table' => 'products', 'name' => 'Gelato', 'localname' => 'Gelato', 'slug' => 'gelato', 'description' => 'Italian style ice cream made with natural ingredients.'],
            ['parent_id' => 1, 'table' => 'products', 'name' => 'Gelato Regular Flavour', 'localname' => 'Gelato Regular Flavour', 'slug' => 'gelato-regular-flavour', 'description' => null],
            ['parent_id' => 1, 'table' => 'products', 'name' => 'Gelato Premium Flavour', 'localname' => 'Gelato Premium Flavour', 'slug' => 'gelato-premium-flavour', 'description' => null],
            ['parent_id' => 1, 'table' => 'products', 'name' => 'Gelato Regular Flavour Vegan', 'localname' => 'Gelato Regular Flavour Vegan', 'slug' => 'gelato-regular-flavour-vegan', 'description' => null],
            ['parent_id' => 1, 'table' => 'products', 'name' => 'Gelato Regular Flavour Seasonal', 'localname' => 'Gelato Regular Flavour Seasonal', 'slug' => 'gelato-regular-flavour-seasonal', 'description' => null],
            ['parent_id' => 1, 'table' => 'products', 'name' => 'Gelato Premium Flavour Vegan', 'localname' => 'Gelato Premium Flavour Vegan', 'slug' => 'gelato-premium-flavour-vegan', 'description' => null],
            ['parent_id' => 1, 'table' => 'products', 'name' => 'Gelato Premium Flavour Seasonal', 'localname' => 'Gelato Premium Flavour Seasonal', 'slug' => 'gelato-premium-flavour-seasonal', 'description' => null],
            ['parent_id' => 1, 'table' => 'products', 'name' => 'Gelato Premium Flavour Vegan Seasonal', 'localname' => 'Gelato Premium Flavour Vegan Seasonal', 'slug' => 'gelato-premium-flavour-vegan-seasonal', 'description' => null],
            ['parent_id' => null, 'table' => 'products', 'name' => 'Pastry', 'localname' => 'Kue', 'slug' => 'pastry', 'description' => 'Various kinds of pastries and baked goods.'],
        ];
        $products = [
            // GELATO
            ['category_slug' => 'gelato-regular-flavour', 'display_name' => 'Gianduja', 'name' => 'Gianduja', 'parentheses' => 'Chocolate Hazelnut', 'slug' => 'gianduja-chocolate-hazelnut'],
            ['category_slug' => 'gelato-regular-flavour', 'display_name' => 'Mint', 'name' => 'Mint Straciatella', 'slug' => 'mint-straciatella'],
            ['category_slug' => 'gelato-regular-flavour-vegan', 'display_name' => 'Mango', 'name' => 'Mango Sorbet', 'slug' => 'mango-sorbet'],
            ['category_slug' => 'gelato-regular-flavour', 'display_name' => 'Fiordilatte', 'name' => 'Fiordilatte Straciatella', 'slug' => 'fiordilatte-straciatella'],
            ['category_slug' => 'gelato-regular-flavour', 'display_name' => 'Vanilla Biscoff', 'name' => 'Vanilla Biscoff', 'slug' => 'vanilla-biscoff'],
            ['category_slug' => 'gelato-regular-flavour-seasonal', 'display_name' => 'Yuzu', 'name' => 'Yuzu', 'slug' => 'yuzu'],
            ['category_slug' => 'gelato-regular-flavour', 'display_name' => 'Coffee Cookies & Cream', 'name' => 'Coffee Cookies & Cream', 'slug' => 'coffee-cookies-and-cream'],
            ['category_slug' => 'gelato-premium-flavour', 'display_name' => 'Pistachio', 'name' => 'Pistachio', 'slug' => 'pistachio'],
            ['category_slug' => 'gelato-premium-flavour', 'display_name' => 'Matcha', 'name' => 'Matcha', 'slug' => 'matcha'],
            ['category_slug' => 'gelato-premium-flavour-seasonal', 'display_name' => 'Ube', 'name' => 'Ube', 'slug' => 'ube'],
            ['category_slug' => 'gelato-premium-flavour-seasonal', 'display_name' => 'Hojicha', 'name' => 'Hojicha', 'slug' => 'hojicha'],
            ['category_slug' => 'gelato-premium-flavour-vegan-seasonal', 'display_name' => 'Dark Chocolate Sorbe', 'name' => 'Extra Dark Chocolate Sorbe', 'slug' => 'extra-dark-chocolate-sorbet'],
            ['category_slug' => 'gelato-premium-flavour-vegan-seasonal', 'display_name' => 'Peach Sorbe', 'name' => 'Peach Sorbe', 'slug' => 'peach-sorbet'],
            ['category_slug' => 'gelato-premium-flavour', 'display_name' => 'Strawberry Sorbe', 'name' => 'Strawberry Sorbe', 'slug' => 'strawberry-sorbet'],

            // PASTRY
            ['category_slug' => 'pastry', 'display_name' => 'Lapis Legit', 'name' => 'Lapis Legit', 'slug' => 'lapis-legit'],
            ['category_slug' => 'pastry', 'display_name' => 'Mini Quiche', 'name' => 'Mini Quiche', 'slug' => 'mini-quiche'],
            ['category_slug' => 'pastry', 'display_name' => 'Brownies', 'name' => 'Brownies', 'slug' => 'almond-croissant'],
            ['category_slug' => 'pastry', 'display_name' => 'Madeleines', 'name' => 'Madeleines', 'slug' => 'madeleines'],
            ['category_slug' => 'pastry', 'display_name' => 'Kue Soes', 'name' => 'Kue Soes', 'slug' => 'choux-pastry'],
            ['category_slug' => 'pastry', 'display_name' => 'Cookies', 'name' => 'Cookies', 'slug' => 'cookies'],
            ['category_slug' => 'pastry', 'display_name' => 'Bolu', 'name' => 'Bolu', 'slug' => 'bolu'],
            ['category_slug' => 'pastry', 'display_name' => 'Puff', 'name' => 'Puff', 'slug' => 'puff'],
            ['category_slug' => 'pastry', 'display_name' => 'Cake', 'name' => 'Cake', 'slug' => 'cake'],
        ];
        $product_variants = [
            // GELATO VARIANTS
            ['product_slug' => 'gianduja-chocolate-hazelnut', 'display_name' => 'Gianduja Cup', 'name' => 'Cup 4 oz', 'slug' => 'gianduja-chocolate-hazelnut-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 43000],
            ['product_slug' => 'gianduja-chocolate-hazelnut', 'display_name' => 'Gianduja Jar', 'name' => 'Jar 300 ml', 'slug' => 'gianduja-chocolate-hazelnut-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 105000],
            ['product_slug' => 'mint-straciatella', 'display_name' => 'Mint Cup', 'name' => 'Cup 4 oz', 'slug' => 'mint-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 43000],
            ['product_slug' => 'mint-straciatella', 'display_name' => 'Mint Jar', 'name' => 'Jar 300 ml', 'slug' => 'mint-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 105000],
            ['product_slug' => 'mango-sorbet', 'display_name' => 'Mango Cup', 'name' => 'Cup 4 oz', 'slug' => 'mango-sorbet-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 43000],
            ['product_slug' => 'mango-sorbet', 'display_name' => 'Mango Jar', 'name' => 'Jar 300 ml', 'slug' => 'mango-sorbet-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 105000],
            ['product_slug' => 'fiordilatte-straciatella', 'display_name' => 'Fiordilatte Cup', 'name' => 'Cup 4 oz', 'slug' => 'fiordilatte-straciatella-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 43000],
            ['product_slug' => 'fiordilatte-straciatella', 'display_name' => 'Fiordilatte Jar', 'name' => 'Jar 300 ml', 'slug' => 'fiordilatte-straciatella-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 105000],
            ['product_slug' => 'vanilla-biscoff', 'display_name' => 'Vanilla Biscoff Cup', 'name' => 'Cup 4 oz', 'slug' => 'vanilla-biscoff-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 43000],
            ['product_slug' => 'vanilla-biscoff', 'display_name' => 'Vanilla Biscoff Jar', 'name' => 'Jar 300 ml', 'slug' => 'vanilla-biscoff-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 105000],
            ['product_slug' => 'yuzu', 'display_name' => 'Yuzu Cup', 'name' => 'Cup 4 oz', 'slug' => 'yuzu-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 43000],
            ['product_slug' => 'yuzu', 'display_name' => 'Yuzu Jar', 'name' => 'Jar 300 ml', 'slug' => 'yuzu-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 105000],
            ['product_slug' => 'coffee-cookies-and-cream', 'display_name' => 'Coffe Cookies&Cream Cup', 'name' => 'Cup 4 oz', 'slug' => 'coffee-cookies-and-cream-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 43000],
            ['product_slug' => 'coffee-cookies-and-cream', 'display_name' => 'Coffe Cookies&Cream Jar', 'name' => 'Jar 300 ml', 'slug' => 'coffee-cookies-and-cream-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 105000],
            ['product_slug' => 'pistachio', 'display_name' => 'Pistachio Cup', 'name' => 'Cup 4 oz', 'slug' => 'pistachio-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 45000],
            ['product_slug' => 'pistachio', 'display_name' => 'Pistachio Jar', 'name' => 'Jar 300 ml', 'slug' => 'pistachio-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 109000],
            ['product_slug' => 'matcha', 'display_name' => 'Matcha Cup', 'name' => 'Cup 4 oz', 'slug' => 'matcha-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 45000],
            ['product_slug' => 'matcha', 'display_name' => 'Matcha Jar', 'name' => 'Jar 300 ml', 'slug' => 'matcha-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 109000],
            ['product_slug' => 'ube', 'display_name' => 'Ube Cup', 'name' => 'Cup 4 oz', 'slug' => 'ube-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 45000],
            ['product_slug' => 'ube', 'display_name' => 'Ube Jar', 'name' => 'Jar 300 ml', 'slug' => 'ube-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 109000],
            ['product_slug' => 'hojicha', 'display_name' => 'Hojicha Cup', 'name' => 'Cup 4 oz', 'slug' => 'hojicha-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 45000],
            ['product_slug' => 'hojicha', 'display_name' => 'Hojicha Jar', 'name' => 'Jar 300 ml', 'slug' => 'hojicha-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 109000],
            ['product_slug' => 'extra-dark-chocolate-sorbet', 'display_name' => 'Dark Chocolate Cup', 'name' => 'Cup 4 oz', 'slug' => 'extra-dark-chocolate-sorbet-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 45000],
            ['product_slug' => 'extra-dark-chocolate-sorbet', 'display_name' => 'Dark Chocolate Jar', 'name' => 'Jar 300 ml', 'slug' => 'extra-dark-chocolate-sorbet-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 109000],
            ['product_slug' => 'strawberry-sorbet', 'display_name' => 'Strawberry Cup', 'name' => 'Cup 4 oz', 'slug' => 'strawberry-sorbet-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 45000],
            ['product_slug' => 'strawberry-sorbet', 'display_name' => 'Strawberry Jar', 'name' => 'Jar 300 ml', 'slug' => 'strawberry-sorbet-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 109000],
            ['product_slug' => 'peach-sorbet', 'display_name' => 'Peach Cup', 'name' => 'Cup 4 oz', 'slug' => 'peach-sorbet-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 45000],
            ['product_slug' => 'peach-sorbet', 'display_name' => 'Peach Jar', 'name' => 'Jar 300 ml', 'slug' => 'peach-sorbet-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 109000],

            // PASTRY VARIANTS
            ['product_slug' => 'lapis-legit', 'display_name' => 'Lapis Legit Whole Original', 'name' => 'Lapis Legit Whole Original', 'slug' => 'lapis-legit-whole-original', 'size' => '20x20', 'unit' => 'cm', 'base_price' => 640000],
            ['product_slug' => 'lapis-legit', 'display_name' => 'Lapis Legit Whole Prunes', 'name' => 'Lapis Legit Whole Prunes', 'slug' => 'lapis-legit-whole-prunes', 'size' => '20x20', 'unit' => 'cm', 'base_price' => 695000],
            ['product_slug' => 'lapis-legit', 'display_name' => 'Lapis Legit Half Original', 'name' => 'Lapis Legit Half Original', 'slug' => 'lapis-legit-half-original', 'size' => '10x20', 'unit' => 'cm', 'base_price' => 360000],
            ['product_slug' => 'lapis-legit', 'display_name' => 'Lapis Legit Half Prunes', 'name' => 'Lapis Legit Half Prunes', 'slug' => 'lapis-legit-half-prunes', 'size' => '10x20', 'unit' => 'cm', 'base_price' => 395000],
            ['product_slug' => 'lapis-legit', 'display_name' => 'Lapis Legit Bites Original', 'name' => 'Lapis Legit Bites Original', 'slug' => 'lapis-legit-bites-original', 'size' => '10', 'unit' => 'pcs', 'base_price' => 125000],
            ['product_slug' => 'lapis-legit', 'display_name' => 'Lapis Legit Bites Prunes', 'name' => 'Lapis Legit Bites Prunes', 'slug' => 'lapis-legit-bites-prunes', 'size' => '10', 'unit' => 'pcs', 'base_price' => 145000],
            ['product_slug' => 'mini-quiche', 'display_name' => 'Quiche Smoked Beef', 'name' => 'Mini Quiche Smoked Beef & Spinach', 'slug' => 'mini-quiche-smoked-beef-and-spinach', 'size' => 9, 'unit' => 'pcs', 'base_price' => 145000],
            ['product_slug' => 'mini-quiche', 'display_name' => 'Quiche Salmon', 'name' => 'Mini Quiche Salmon & Spinach', 'slug' => 'mini-quiche-salmon-and-spinach', 'size' => 9, 'unit' => 'pcs', 'base_price' => 160000],
            ['product_slug' => 'mini-quiche', 'display_name' => 'Quiche Mix', 'name' => 'Mini Quiche Mix', 'slug' => 'mini-quiche-mix', 'size' => 9, 'unit' => 'pcs', 'base_price' => 160000],
            ['product_slug' => 'brownies', 'display_name' => 'Brownie Bites', 'name' => 'Fudgy Brownie Bites', 'slug' => 'fudgy-brownie-bites', 'size' => 10, 'unit' => 'pcs', 'base_price' => 60000],
            ['product_slug' => 'madeleines', 'display_name' => 'Madeleine', 'name' => 'Madeleine', 'slug' => 'madeleines', 'size' => 10, 'unit' => 'pcs', 'base_price' => 95000],
            ['product_slug' => 'choux-pastry', 'display_name' => 'Kue Soes', 'name' => 'Kue Soes Classic with Vla', 'slug' => 'classic-choux-pastry', 'size' => 9, 'unit' => 'pcs', 'base_price' => 110000],
            ['product_slug' => 'cookies', 'display_name' => 'Choco Cookies', 'name' => 'Choco Chip Cookies', 'slug' => 'choco-chip-cookies-4pcs', 'size' => 4, 'unit' => 'pcs', 'base_price' => 68000],
            ['product_slug' => 'cookies', 'display_name' => 'Choco Cookies', 'name' => 'Choco Chip Cookies', 'slug' => 'choco-chip-cookies-6pcs', 'size' => 6, 'unit' => 'pcs', 'base_price' => 90000],
            ['product_slug' => 'bolu', 'display_name' => 'Bolu Jadul Ori', 'name' => 'Premium Bolu Jadul Original', 'slug' => 'premium-bolu-jadul-original', 'size' => "10x20", 'unit' => 'cm', 'base_price' => 145000],
            ['product_slug' => 'bolu', 'display_name' => 'Bolu Jadul Pandan', 'name' => 'Premium Bolu Jadul Pandan', 'slug' => 'premium-bolu-jadul-pandan', 'size' => "10x20", 'unit' => 'cm', 'base_price' => 160000],
            ['product_slug' => 'bolu', 'display_name' => 'Bolu Tape Keju', 'name' => 'Bolu Tape Keju', 'slug' => 'bolu-tape-keju', 'size' => "10x20", 'unit' => 'cm', 'base_price' => 140000],
            ['product_slug' => 'puff', 'display_name' => 'Nutella Puff', 'name' => 'Nutella Puff', 'slug' => 'nutella-puff', 'size' => 9, 'unit' => 'pcs', 'base_price' => 90000],
            ['product_slug' => 'puff', 'display_name' => 'Biscoff Puff', 'name' => 'Biscoff Puff', 'slug' => 'biscoff-puff', 'size' => 9, 'unit' => 'pcs', 'base_price' => 90000],
            ['product_slug' => 'puff', 'display_name' => 'Choco Cheese Puff', 'name' => 'Choco Cheese Puff', 'slug' => 'choco-cheese-puff', 'size' => 9, 'unit' => 'pcs', 'base_price' => 90000],
            ['product_slug' => 'cake', 'display_name' => 'Banana Choco Cake', 'name' => 'Banana Choco Cake', 'slug' => 'banana-choco-cake', 'size' => "10x20", 'unit' => 'pcs', 'base_price' => 175000],
        ];

        $editions = [
            ['slug' => 'standard', 'name' => 'Standard', 'start_date' => null, 'end_date' => null, 'description' => 'Default edition for all products.'],
            ['slug' => 'natal-2025', 'name' => 'Natal 2025', 'start_date' => '2025-12-01', 'end_date' => '2025-12-31', 'description' => 'Special edition for Christmas 2025.'],
            ['slug' => 'imlek-2026', 'name' => 'Imlek 2026', 'start_date' => '2026-01-15', 'end_date' => '2026-02-15', 'description' => 'Special edition for Chinese New Year 2026.'],
        ];

        $product_variant_editions = [
        ];

        \DB::table('categories')->insert($categories);

        foreach ($products as $product) {
            $category = \DB::table('categories')->where('slug', $product['category_slug'])->first();
            if ($category) {
                $product['category_id'] = $category->id;
                Product::create($product);
            }
        }

        foreach ($product_variants as $product_variant) {
            $product = Product::where('slug', $product_variant['product_slug'])->first();
            if ($product) {
                $product_variant['product_id'] = $product->id;
                ProductVariant::create($product_variant);
            }
        }

        \DB::table('editions')->insert($editions);

        foreach ($product_variant_editions as $pve) {
            $product_variant = ProductVariant::where('slug', $pve['product_variant_slug'])->first();
            $edition = \DB::table('editions')->where('slug', $pve['edition_slug'])->first();
            if ($product_variant && $edition) {
                $pve['product_variant_id'] = $product_variant->id;
                $pve['edition_id'] = $edition->id;
                ProductVariantEdition::create($pve);
            }
        }
    }
}
