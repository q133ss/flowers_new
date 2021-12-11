<?php

namespace App\Http\Controllers\Admin\Catalog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Category;

class ProductController extends Controller
{
    public function index(){
        $products = Product::paginate();
        return view('admin.catalog.products.index', compact('products'));
    }

    public function edit($id){
        $product = Product::find($id);
        $categories = Category::get();
        return view('admin.catalog.products.edit', [
            'product' => $product,
            'categories' => $categories
        ]);
    }
}
