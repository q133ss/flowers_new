<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index(){
        return view('cart.index');
    }

    public function add(Request $request){
        $validated = $request->validate([
            'pid' => 'required|integer|exists:products',
            'qty' => 'integer|required|min:1',
            'size' => 'integer|exists:sizes',
            'color' => 'integer|exists:colors',
            'colors.*' => 'integer|required|exists:colors'
        ]);
        dd($validated);
        return 1;
    }

    public function edit(){
        return 1;
    }

    public function delete(){
        return 1;
    }
}
