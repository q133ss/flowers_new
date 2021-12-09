<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;

//
// class="js-modal-open" data-url="asd"
//

class CatalogController extends Controller
{
    //
    public function index()
    {
        $banners = [];
        $cats = Category::byType(Category::TYPE_PRODUCTS);
        $addits = Category::byType(Category::TYPE_ADDITIONALLY);
        dd($banners, $cats->with('child')->get(), $addits->get());
    }

    public function category(Request $request, $id)
    {
        $category = Category::byId($id);
        $categoryNotFound = Category::byId(1000);
        $products = Product::byCategory($id, $request->query());

        dd($category, $categoryNotFound, $products);
        // Возвращает либо страницу целиком, либо html для модального окна
    }

    public function product()
    {
        $product = Product::byId($id);
        $addits = Category::byType(Category::TYPE_ADDITIONALLY);

        // Возвращает html для модального окна

        dd($product, $addits);
    }
}

