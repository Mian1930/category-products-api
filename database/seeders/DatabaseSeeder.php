<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use\App\Models\Product;
use App\Models\Category;
use App\Models\ProductCategory;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            ['name' => 'Electronics'],
            ['name' => 'Clothing'],
            ['name' => 'Food'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }

        $productCategories = [
            ['product_id' => 1, 'category_id' => 1],
            ['product_id' => 2, 'category_id' => 2],
            ['product_id' => 3, 'category_id' => 3],
        ];

        foreach ($productCategories as $productCategory) {
            ProductCategory::create($productCategory);
        }

        $products = [
            ['name' => 'iPhone 13 Pro', 'price' => 999, 'size' => '6.1 inches','photo' => 'https://www.apple.com/iphone-13-pro/images/hero_01_detail.jpg'],
            ['name' => 'Samsung Galaxy S22 Ultra', 'price' => 1199, 'size' => '6.8 inches','photo' => 'https://www.apple.com/iphone-13-pro/images/hero_01_detail.jpg'],
            ['name' => 'Google Pixel 6 Pro', 'price' => 899, 'size' => '6.7 inches','photo' => 'https://www.apple.com/iphone-13-pro/images/hero_01_detail.jpg'],
        ];

        foreach ($products as $product) {
            Product::create($product);
        }
    }

}
