<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\City;
use Cookie;

class CityController extends Controller
{
    //
    public function index()
    {
        $cities = City::get();
        return view('city', compact('cities'));
    }
    public function setCity($id)
    {
        // Ставим город по умолчанию. а нужно показывать страницу выбора города.
        Cookie::queue('city_id', $id, 43800);
        return redirect()->route('home');
    }
}
