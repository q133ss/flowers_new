<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Setting;
use App\Models\QuizSetting;

class SettingController extends Controller
{
    public function index(){
        $min_order = Setting::where('key', 'order_min')->first();
        //Quiz blocks
        $block1 = QuizSetting::where('block', 1)->get();
        $block2 = QuizSetting::where('block', 2)->get();
        $block3_1 = QuizSetting::where('block', '31')->first();
        $block3_2 = QuizSetting::where('block', '32')->first();
        $block41 = QuizSetting::where('block', '41')->first();
        $block42 = QuizSetting::where('block', '42')->first();
        return view('admin.settings.index', [
            'min_order' => $min_order,
            'block1' => $block1,
            'block2' => $block2,
            'block3_1' => $block3_1,
            'block3_2'=> $block3_2,
            'block41'=> $block41,
            'block42'=> $block42
        ]);
    }

    public function min_order(Request $request){
        $settings = Setting::updateOrCreate(
            ['key' => 'order_min'],
            ['value' => $request->sum]);
        return redirect()->back()->withSuccess('Минимальный заказ успешно обновлен!');
    }

    public function add_who(Request $request){
        $block1 = new QuizSetting();
        $block1->title = $request->name;
        if($request->file('img') != NULL) {
            $img_path = $request->file('img')->store('uploads', 'public');
            $block1->img = '/storage/' . $img_path;
        }
        $block1->block = $request->block;
        $block1->save();

        return redirect()->back();
    }

    public function block_update(Request $request){
        $block = QuizSetting::where('id',$request->id)->first();
        $block->title = $request->name;
        if($request->file('img') != NULL) {
            $img_path = $request->file('img')->store('uploads', 'public');
            $block->img = '/storage/' . $img_path;
        }
        $block->block = $request->block;
        $block->save();

        return redirect()->back();
    }

    public function block_delete(Request $request){
        $block = QuizSetting::find($request->id);
        $block->delete();
        return redirect()->back();
    }
}
