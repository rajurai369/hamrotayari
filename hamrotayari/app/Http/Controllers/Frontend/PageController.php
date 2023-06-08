<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){

        return view('frontend.screens.home');

    }

    public function about(){
        return view('frontend.screens.about');

    }

    public function course(){
        return view('frontend.screens.course');

    }

    public function page(){

    }

    public function course_detail(){

        return view('frontend.screens.detailcourse');

    }

    public function feature(){

        return view('frontend.screens.feature');

    }

    public function instrutor(){

        return view('frontend.screens.instrutor');

    }


    public function testimonal(){

        return view('frontend.screens.testimonal');

    }



    public function contact(){

        return view('frontend.screens.contact');

    }


    public function secondpage(){

        return view('frontend.screens.secondpage');

    }



}
