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

        $randomRecord3 = News::inRandomOrder()->first();
        $get4news3 = News::inRandomOrder()->limit(4)->get();

        $randomRecord4 = News::inRandomOrder()->first();
        $get4news4 = News::inRandomOrder()->limit(4)->get();

        $randomRecord5 = News::inRandomOrder()->first();
        $get4news5 = News::inRandomOrder()->limit(4)->get();

        $randomRecord6 = News::inRandomOrder()->first();
        $get4news6 = News::inRandomOrder()->limit(4)->get();

        return view('welcome', [
            'news' => $news,
            'randomRecord'=>$randomRecord,
            'get4news'=>$get4news,

            'randomRecord2'=>$randomRecord2,
            'get4news2'=>$get4news2,

            'randomRecord3'=>$randomRecord3,
            'get4news3'=>$get4news3,

            'randomRecord4'=>$randomRecord4,
            'get4news4'=>$get4news4,

            'randomRecord5'=>$randomRecord5,
            'get4news5'=>$get4news5,

            'randomRecord6'=>$randomRecord6,
            'get4news6'=>$get4news6,
        ]);
    }
}
