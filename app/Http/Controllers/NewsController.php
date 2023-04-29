<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    //
    public function getNews(){
        $news = News::take(8)->get();
        $randomRecord = News::inRandomOrder()->first();
        $get4news = News::inRandomOrder()->limit(4)->get();

        $randomRecord2 = News::inRandomOrder()->first();
        $get4news2 = News::inRandomOrder()->limit(4)->get();


        return view('welcome', [
            'news' => $news,
            'randomRecord'=>$randomRecord,
            'get4news'=>$get4news,
            'randomRecord2'=>$randomRecord2,
            'get4news2'=>$get4news2
        ]);
    }
}
