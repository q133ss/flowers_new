<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ConstructorController extends Controller
{
    //
    public function index()
    {
        $banners = [];
        $catsMain = Category::byType(Category::TYPE_CONSTR_MAIN);
        $catsMain = Category::byType(Category::TYPE_CONSTR_SUB);
        $catsMain = Category::byType(Category::TYPE_CONSTR_OAZIS);
        dd($banners, $cats->with('child')->get(), $addits->get());
    }

    public function category(Request $request, $id)
    {
        $category = Category::byId($id);
        $products = Product::byCategory($id, $request->query());

        dd($category, $products);
        // Возвращает либо страницу целиком, либо html для модального окна
    }
}
