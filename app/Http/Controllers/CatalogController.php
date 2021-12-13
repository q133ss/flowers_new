<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Product;
use App\Models\MainBanner as Banner;

//
// class="js-modal-open" data-url="asd"
//

class CatalogController extends Controller
{
    //
    public function index()
    {
        $banners = Banner::byType(Banner::TYPE_MAIN)->limit(20)->get();

        $cats = Category::byType(Category::TYPE_PRODUCTS)->get();
        $addits = Category::byType(Category::TYPE_ADDITIONALLY)->get();
        
        return view('catalog.index', compact('banners', 'cats', 'addits'));
    }

    public function category(Request $request, $id)
    {
        $category = Category::byId($id);
        $products = Product::byCategory($id, $request->query());

        dd($category, $products);
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

