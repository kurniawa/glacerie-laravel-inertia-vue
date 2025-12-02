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
            ['category_slug' => 'gelato-regular-flavour', 'shortname' => 'Gianduja', 'name' => 'Gianduja', 'parentheses' => 'Chocolate Hazelnut', 'slug' => 'gianduja-chocolate-hazelnut'],
            ['category_slug' => 'gelato-regular-flavour', 'shortname' => 'Mint', 'name' => 'Mint Straciatella', 'slug' => 'mint-straciatella'],
            ['category_slug' => 'gelato-regular-flavour-vegan', 'shortname' => 'Mango', 'name' => 'Mango Sorbet', 'slug' => 'mango-sorbet'],
            ['category_slug' => 'gelato-regular-flavour', 'shortname' => 'Fiordilatte', 'name' => 'Fiordilatte Straciatella', 'slug' => 'fiordilatte-straciatella'],
            ['category_slug' => 'gelato-regular-flavour', 'shortname' => 'Vanilla Biscoff', 'name' => 'Vanilla Biscoff', 'slug' => 'vanilla-biscoff'],
            ['category_slug' => 'gelato-regular-flavour-seasonal', 'shortname' => 'Yuzu', 'name' => 'Yuzu', 'slug' => 'yuzu'],
            ['category_slug' => 'gelato-regular-flavour', 'shortname' => 'Coffee Cookies & Cream', 'name' => 'Coffee Cookies & Cream', 'slug' => 'coffee-cookies-and-cream'],
            ['category_slug' => 'gelato-premium-flavour', 'shortname' => 'Pistachio', 'name' => 'Pistachio', 'slug' => 'pistachio'],
            ['category_slug' => 'gelato-premium-flavour', 'shortname' => 'Matcha', 'name' => 'Matcha', 'slug' => 'matcha'],
            ['category_slug' => 'gelato-premium-flavour-seasonal', 'shortname' => 'Ube', 'name' => 'Ube', 'slug' => 'ube'],
            ['category_slug' => 'gelato-premium-flavour-seasonal', 'shortname' => 'Hojicha', 'name' => 'Hojicha', 'slug' => 'hojicha'],
            ['category_slug' => 'gelato-premium-flavour-vegan-seasonal', 'shortname' => 'Dark Chocolate Sorbe', 'name' => 'Extra Dark Chocolate Sorbe', 'slug' => 'extra-dark-chocolate-sorbet'],
            ['category_slug' => 'gelato-premium-flavour-vegan-seasonal', 'shortname' => 'Peach Sorbe', 'name' => 'Peach Sorbe', 'slug' => 'peach-sorbet'],
            ['category_slug' => 'gelato-premium-flavour', 'shortname' => 'Strawberry Sorbe', 'name' => 'Strawberry Sorbe', 'slug' => 'strawberry-sorbet'],

            // PASTRY
            ['category_slug' => 'pastry', 'shortname' => 'Lapis Legit', 'name' => 'Lapis Legit', 'slug' => 'lapis-legit'],
            ['category_slug' => 'pastry', 'shortname' => 'Mini Quiche', 'name' => 'Mini Quiche', 'slug' => 'mini-quiche'],
            ['category_slug' => 'pastry', 'shortname' => 'Brownies', 'name' => 'Brownies', 'slug' => 'almond-croissant'],
            ['category_slug' => 'pastry', 'shortname' => 'Madeleines', 'name' => 'Madeleines', 'slug' => 'madeleines'],
        ];
        $product_variants = [
            // GELATO VARIANTS
            ['product_slug' => 'gianduja-chocolate-hazelnut', 'shortname' => 'Gianduja Cup', 'name' => 'Cup 4 oz', 'slug' => 'gianduja-chocolate-hazelnut-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 43000],
            ['product_slug' => 'gianduja-chocolate-hazelnut', 'shortname' => 'Gianduja Jar', 'name' => 'Jar 300 ml', 'slug' => 'gianduja-chocolate-hazelnut-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 105000],
            ['product_slug' => 'mint-straciatella', 'shortname' => 'Mint Cup', 'name' => 'Cup 4 oz', 'slug' => 'mint-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 43000],
            ['product_slug' => 'mint-straciatella', 'shortname' => 'Mint Jar', 'name' => 'Jar 300 ml', 'slug' => 'mint-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 105000],
            ['product_slug' => 'mango-sorbet', 'shortname' => 'Mango Cup', 'name' => 'Cup 4 oz', 'slug' => 'mango-sorbet-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 43000],
            ['product_slug' => 'mango-sorbet', 'shortname' => 'Mango Jar', 'name' => 'Jar 300 ml', 'slug' => 'mango-sorbet-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 105000],
            ['product_slug' => 'fiordilatte-straciatella', 'shortname' => 'Fiordilatte Cup', 'name' => 'Cup 4 oz', 'slug' => 'fiordilatte-straciatella-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 43000],
            ['product_slug' => 'fiordilatte-straciatella', 'shortname' => 'Fiordilatte Jar', 'name' => 'Jar 300 ml', 'slug' => 'fiordilatte-straciatella-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 105000],
            ['product_slug' => 'vanilla-biscoff', 'shortname' => 'Vanilla Biscoff Cup', 'name' => 'Cup 4 oz', 'slug' => 'vanilla-biscoff-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 43000],
            ['product_slug' => 'vanilla-biscoff', 'shortname' => 'Vanilla Biscoff Jar', 'name' => 'Jar 300 ml', 'slug' => 'vanilla-biscoff-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 105000],
            ['product_slug' => 'yuzu', 'shortname' => 'Yuzu Cup', 'name' => 'Cup 4 oz', 'slug' => 'yuzu-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 43000],
            ['product_slug' => 'yuzu', 'shortname' => 'Yuzu Jar', 'name' => 'Jar 300 ml', 'slug' => 'yuzu-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 105000],
            ['product_slug' => 'coffee-cookies-and-cream', 'shortname' => 'Coffe Cookies&Cream Cup', 'name' => 'Cup 4 oz', 'slug' => 'coffee-cookies-and-cream-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 43000],
            ['product_slug' => 'coffee-cookies-and-cream', 'shortname' => 'Coffe Cookies&Cream Jar', 'name' => 'Jar 300 ml', 'slug' => 'coffee-cookies-and-cream-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 105000],
            ['product_slug' => 'pistachio', 'shortname' => 'Pistachio Cup', 'name' => 'Cup 4 oz', 'slug' => 'pistachio-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 45000],
            ['product_slug' => 'pistachio', 'shortname' => 'Pistachio Jar', 'name' => 'Jar 300 ml', 'slug' => 'pistachio-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 109000],
            ['product_slug' => 'matcha', 'shortname' => 'Matcha Cup', 'name' => 'Cup 4 oz', 'slug' => 'matcha-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 45000],
            ['product_slug' => 'matcha', 'shortname' => 'Matcha Jar', 'name' => 'Jar 300 ml', 'slug' => 'matcha-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 109000],
            ['product_slug' => 'ube', 'shortname' => 'Ube Cup', 'name' => 'Cup 4 oz', 'slug' => 'ube-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 45000],
            ['product_slug' => 'ube', 'shortname' => 'Ube Jar', 'name' => 'Jar 300 ml', 'slug' => 'ube-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 109000],
            ['product_slug' => 'hojicha', 'shortname' => 'Hojicha Cup', 'name' => 'Cup 4 oz', 'slug' => 'hojicha-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 45000],
            ['product_slug' => 'hojicha', 'shortname' => 'Hojicha Jar', 'name' => 'Jar 300 ml', 'slug' => 'hojicha-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 109000],
            ['product_slug' => 'extra-dark-chocolate-sorbet', 'shortname' => 'Dark Chocolate Cup', 'name' => 'Cup 4 oz', 'slug' => 'extra-dark-chocolate-sorbet-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 45000],
            ['product_slug' => 'extra-dark-chocolate-sorbet', 'shortname' => 'Dark Chocolate Jar', 'name' => 'Jar 300 ml', 'slug' => 'extra-dark-chocolate-sorbet-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 109000],
            ['product_slug' => 'strawberry-sorbet', 'shortname' => 'Strawberry Cup', 'name' => 'Cup 4 oz', 'slug' => 'strawberry-sorbet-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 45000],
            ['product_slug' => 'strawberry-sorbet', 'shortname' => 'Strawberry Jar', 'name' => 'Jar 300 ml', 'slug' => 'strawberry-sorbet-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 109000],
            ['product_slug' => 'peach-sorbet', 'shortname' => 'Peach Cup', 'name' => 'Cup 4 oz', 'slug' => 'peach-sorbet-cup-4-oz', 'size' => 4, 'unit' => 'oz', 'base_price' => 45000],
            ['product_slug' => 'peach-sorbet', 'shortname' => 'Peach Jar', 'name' => 'Jar 300 ml', 'slug' => 'peach-sorbet-jar-300-ml', 'size' => 300, 'unit' => 'ml', 'base_price' => 109000],

            // PASTRY VARIANTS
            ['product_slug' => 'lapis-legit', 'shortname' => 'Lapis Legit Whole Original', 'name' => 'Lapis Legit Whole Original', 'slug' => 'lapis-legit-whole-original', 'size' => '20x20', 'unit' => 'cm', 'base_price' => 640000],
            ['product_slug' => 'lapis-legit', 'shortname' => 'Lapis Legit Whole Prunes', 'name' => 'Lapis Legit Whole Prunes', 'slug' => 'lapis-legit-whole-prunes', 'size' => '20x20', 'unit' => 'cm', 'base_price' => 695000],
            ['product_slug' => 'lapis-legit', 'shortname' => 'Lapis Legit Half Original', 'name' => 'Lapis Legit Half Original', 'slug' => 'lapis-legit-half-original', 'size' => '10x20', 'unit' => 'cm', 'base_price' => 360000],
            ['product_slug' => 'lapis-legit', 'shortname' => 'Lapis Legit Half Prunes', 'name' => 'Lapis Legit Half Prunes', 'slug' => 'lapis-legit-half-prunes', 'size' => '10x20', 'unit' => 'cm', 'base_price' => 395000],
            ['product_slug' => 'lapis-legit', 'shortname' => 'Lapis Legit Bites Original', 'name' => 'Lapis Legit Bites Original', 'slug' => 'lapis-legit-bites-original', 'size' => '10', 'unit' => 'pcs', 'base_price' => 125000],
            ['product_slug' => 'lapis-legit', 'shortname' => 'Lapis Legit Bites Prunes', 'name' => 'Lapis Legit Bites Prunes', 'slug' => 'lapis-legit-bites-prunes', 'size' => '10', 'unit' => 'pcs', 'base_price' => 145000],
            ['product_slug' => 'mini-quiche', 'shortname' => 'Quiche Smoked Beef', 'name' => 'Mini Quiche Smoked Beef & Spinach', 'slug' => 'mini-quiche-smoked-beef-and-spinach', 'size' => 9, 'unit' => 'pcs', 'base_price' => 145000],
            ['product_slug' => 'mini-quiche', 'shortname' => 'Quiche Salmon', 'name' => 'Mini Quiche Salmon & Spinach', 'slug' => 'mini-quiche-salmon-and-spinach', 'size' => 9, 'unit' => 'pcs', 'base_price' => 160000],
            ['product_slug' => 'mini-quiche', 'shortname' => 'Quiche Mix', 'name' => 'Mini Quiche Mix', 'slug' => 'mini-quiche-mix', 'size' => 9, 'unit' => 'pcs', 'base_price' => 160000],
            ['product_slug' => 'brownies', 'shortname' => 'Brownie Bites', 'name' => 'Fudgy Brownie Bites', 'slug' => 'fudgy-brownie-bites', 'size' => 10, 'unit' => 'pcs', 'base_price' => 60000],
            ['product_slug' => 'madeleines', 'shortname' => 'Madeleine', 'name' => 'Madeleine', 'slug' => 'madeleines', 'size' => 10, 'unit' => 'pcs', 'base_price' => 95000],
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
