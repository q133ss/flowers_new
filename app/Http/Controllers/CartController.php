<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Cookie;
use MongoDB\Driver\Session;

class CartController extends Controller
{
    public function index(){
//        dd($_COOKIE['cart']);
//        $cart;
//        $ids = [];
//        foreach($cart $k => $q) {
//            $a = explode('_', $k);
//            $ids[] = $a[0];
//        }
//        array_unique($ids);
        $products = Product::byId($ids);

        $cartProducts =[];
        /*
         * ID
         * img
         * name
         * price
         * sale
         * score
         * k
         */
//        foreach($cart $k => $q) {
//            $a = explode('_', $k);
//            $cartProducts = [];
//        }

        return view('cart.index');
    }

    public function add(Request $request){
        $validated = $request->validate([
            'pid' => 'required|integer|exists:products,id',
            'qty' => 'integer|required|min:1',
            'size' => 'integer|exists:sizes,id',
            'color' => 'integer|exists:colors,id',
            'lenta1' => 'integer|nullable',
            'lenta2' => 'integer|nullable'
        ]);

        $basket = session('basket_main', []);
        $key  = $validated['pid'].'_';
        $key .= (isset($validated['size']) ? $validated['size'] : '').'_';
        $key .= (isset($validated['color']) ? $validated['color'] : '');

        if (isset($basket[$key])) {
            $a = [$validated['qty'] + $basket[$key][0]];
            if (isset($validated['lenta1'])) $a[] = $validated['lenta1'];
            else {
                if (isset($basket[$key][1]])) $a[] = $basket[$key][1]];
            }
            if (isset($validated['lenta2'])) $a[] = $validated['lenta2'];
            else {
                if (isset($basket[$key][2]])) $a[] = $basket[$key][2]];
            }
            $basket[$key] = $a;
        } else {
            $a = [$validated['qty']];
            if (isset($validated['lenta1'])) $a[] = $validated['lenta1'];
            if (isset($validated['lenta2'])) $a[] = $validated['lenta2'];
            $basket[$key] = $a;
        }
        session(['basket_main' => $basket]);

        return 1;



//        if($request['lenta1'] == NULL || $request['lenta2'] == NULL) {
//            //simple product
//            $cart = $validated['pid'] . '_' . (isset($validated['size']) ? $validated['size'] : '') . '_' . $validated['color'];
//            if (Cookie::get($cart) == NULL) {
//                $cart_cookie = Cookie::make($cart, $validated['qty'], 43200);
//            } else {
//                $current_value = Cookie::get($cart);
//                Cookie::forget(serialize($cart));
//                $cart_cookie = Cookie::make($cart, $current_value + $validated['qty'], 43200);
//            }
//            echo $cart_cookie;
//            return response()->json($cart)->withCookie($cart_cookie);
//        }else{  //lenta
//            //urgently
//            $cart = $validated['pid'].'__'.$validated['color'];
//            $cart_data = [
//                $validated['qty'],
//                $validated['lenta1'],
//                $validated['lenta2']
//            ];
//            $cart_urg = Cookie::make($cart, json_encode($cart_data), 43200);
//            echo Cookie::get($cart);
//            return response()->json($cart)->withCookie($cart_urg);
//
//            //////////////////////////////////////////////
//
//        }

//http://127.0.0.1:8000/add-to-cart?pid=21&qty=1&color=1&colors=1&size=3

        //1_2_3 = 4
        //1 = ID
        //2 = SIZE
        //3 = COLOR
        //4 = QTY

        //В случае срочного заказа id__color = ['qty',len,ta]

        if($request['lenta1'] == NULL || $request['lenta2'] == NULL) {
            //Simple product
            $a = [1 => "1_2"];
            $b = [3 => "2_3"];
            $c = [5 => "33_2"];
            $d = [65 => "12_1"];
            $e = [15 => "9_3"];
//            session()->push('basket',);
//            $ss = session()->push('basket', [1=>2]);
//
//            $ff = array_merge($ss, $a);

            $basket = [
                '2_2' =>1,
                '2_4' =>1,
                '3_4_3' =>4,
            ];




            session()->push('basket', $basket);

            dd();

        }else{
            //Тут лента
        }
    }

    public function edit(){
        $validated = $request->validate([
            'pid' => 'required|integer|exists:products,id',
            'qty' => 'integer|required|min:1',
            'size' => 'integer|exists:sizes,id',
            'color' => 'integer|exists:colors,id',
            'lenta1' => 'integer|nullable',
            'lenta2' => 'integer|nullable'
        ]);

        $basket = session('basket_main', []);
        $key  = $validated['pid'].'_';
        $key .= (isset($validated['size']) ? $validated['size'] : '').'_';
        $key .= (isset($validated['color']) ? $validated['color'] : '');

        if (isset($basket[$key])) {
            $a = [$validated['qty']];
            if (isset($validated['lenta1'])) $a[] = $validated['lenta1'];
            if (isset($validated['lenta2'])) $a[] = $validated['lenta2'];
            $basket[$key] = $a;
        }
        session(['basket_main' => $basket]);

        return 1;
    }

    public function delete($item){
        $validated = $request->validate([
            'pid' => 'required|integer|exists:products,id',
            'size' => 'integer|exists:sizes,id',
            'color' => 'integer|exists:colors,id',
        ]);

        $basket = session('basket_main', []);
        $key  = $validated['pid'].'_';
        $key .= (isset($validated['size']) ? $validated['size'] : '').'_';
        $key .= (isset($validated['color']) ? $validated['color'] : '');

        if (isset($basket[$key])) {
            unset($basket[$key]);
        }
        session(['basket_main' => $basket]);

        return 1;
    }
}
