<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
   //
   public function index(){
    return view('home.index');
    }

    public function about(){
        return view('home.about');
    }

    public function contact(){
        return view('home.contact');
    }

    public function assetmanagement(){
        return view('home.assetmanagement');
    }
    public function principalconsulting(){
        return view('home.principalconsulting');
    }
    public function greenrealty(){
        return view('home.greenrealty');
    }

    public function article(){
        return view('home.article');
    }

    public function whistle(){
        return view('home.whistle');
    }

    public function legal(){
        return view('home.legal');
    }

    public function privacy(){
        return view('home.privacy');
    }



}
