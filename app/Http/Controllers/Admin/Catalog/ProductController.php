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
use App\Models\ProductPath;
use App\Models\ProductSizePath;

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

    public function update(Request $request,$id){
        $product = Product::find($id);
        $product->name = $request->title;
        $product->descr = $request->description;
        $product->status = $request->status;
        $product->price = $request->price;
        $product->score = $request->score;
        $product->sale = $request->sale;
        $product->category_id = $request->cat_id;
        if($request->file('img') != NULL) {
            $img_path = $request->file('img')->store('uploads', 'public');
            $product->img = '/storage/' . $img_path;
        }
        $product->save();

        //Product path
        if($request->location != NULL){
            //Check and remove old path's
            $paths = ProductPath::where('product_id', $product->id)->get();
            if($paths->count() > 0){
                foreach ($paths as $path){
                    $path->delete();
                }
            }
            //Create new path's

            foreach ($request->location as $key => $location){
                $count = $key + 1;
                $product_path = new ProductPath();
                if($location == 'Город'){
                    $model = 'City';
                    $model_id = $request['path-city'.$count];
                }elseif($location == 'Регион'){
                    $model = 'Region';
                    $model_id = $request['path-region'.$count];
                }elseif($location == 'Страна'){
                    $model = 'Country';
                    $model_id = $request['path-country'.$count];
                }

                $product_id = $product->id;
                if($request['path-status'.$count] == 'Да') {
                    $status = 0;
                }else{
                    $status = 1;
                }
                $price = $request['path-price'.$count];
                $score = $request['path-score'.$count];
                $sale = $request['path-sale'.$count];
                $charge = $request['path-charge'.$count];

                $product_path->model = $model;
                $product_path->model_id = $model_id;
                $product_path->product_id = $product_id;
                $product_path->status = $status;
                $product_path->price = $price;
                $product_path->sale = $sale;
                $product_path->score = $score;
                $product_path->charge = $charge;

                if(isset($model_id)) {
                    $product_path->save();
                }
            }
        }
        //Category path
        if($request->size_location != NULL){
            //Check and remove old path's
            $paths = ProductSizePath::where('product_id', $product->id)->get();
            if($paths->count() > 0){
                foreach ($paths as $path){
                    $path->delete();
                }
            }
            //Create new path's

            foreach ($request->size_location as $key => $location){
                $count = $key + 1;
                $product_path = new ProductSizePath();
                if($location == 'Город'){
                    $model = 'City';
                    $model_id = $request['path-size-city'.$count];
                }elseif($location == 'Регион'){
                    $model = 'Region';
                    $model_id = $request['path-size-region'.$count];
                }elseif($location == 'Страна'){
                    $model = 'Country';
                    $model_id = $request['path-size-country'.$count];
                }

                $size_id = $request['size-path'.$count];
                if($request['path-size-status'.$count] == 'Да') {
                    $status = 0;
                }else{
                    $status = 1;
                }
                $product_id = $product->id;
                $price = $request['path-size-price'.$count];
                $score = $request['path-size-score'.$count];
                $sale = $request['path-size-sale'.$count];
                $main = $request['main1'];

                $product_path->model = $model;
                $product_path->model_id = $model_id;
                $product_path->product_id = $product_id;
                $product_path->size_id = $size_id;
                $product_path->status = $status;
                $product_path->price = $price;
                $product_path->sale = $sale;
                $product_path->score = $score;
                if($size_id == $main) {
                    $product_path->main = $main;
                }else{
                    $product_path->main = 0;
                }

                if(isset($model_id)) {
                    $product_path->save();
                }
            }
        }

        return redirect()->back()->withSuccess('Товар успешно изменен');
    }
}
