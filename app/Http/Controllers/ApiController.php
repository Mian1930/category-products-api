<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\ProductCategory;

class ApiController extends Controller
{
    public function fetchAll()
    {
        $products = Product::query()->get();

        return response()->json($products);
    
        return 'hello world';
        }
}
