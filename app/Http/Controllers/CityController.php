<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    //
    public function index()
    {
        return view('city');
    }
    public function setCity($id)
    {
        // Ставим город по умолчанию. а нужно показывать страницу выбора города.
        session(['city_id' => $id]);
        return redirect()->route('home');
    }
}
