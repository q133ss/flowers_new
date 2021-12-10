<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function index(){
        $news = News::paginate(6);
        return view('news.index', compact('news'));
    }

    public function single($news_id){
        $news = News::find($news_id);
        $news_more = News::orderBy('created_at','desc')->where('id','!=', $news_id)->limit(4)->get();
        return view('news.single', [
            'news' => $news,
            'news_more' => $news_more
        ]);
    }
}
