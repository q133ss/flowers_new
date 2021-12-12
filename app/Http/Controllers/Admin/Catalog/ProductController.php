<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;
use App\Models\Color;
use App\Models\Size;
use App\Models\City;
use App\Models\Region;
use App\Models\Country;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate();
        return view('admin.catalog.products.index', compact('products'));
    }

    public function edit($id){
        $product = Product::find($id);
        $categories = Category::get();
        $colors = Color::get();
        $sizes = Size::get();

        $city = City::get();
        $region = Region::get();
        $country = Country::get();

        return view('admin.catalog.products.edit', [
            'product' => $product,
            'categories' => $categories,
            'colors' => $colors,
            'sizes' => $sizes,
            'cities' => $city,
            'regions' => $region,
            'countries' => $country
        ]);
    }
}
