<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('pages.home.index');
    }

    public function aboutUs(){
        return view('pages.about.aboutus');
    }
    public function contact(){
        return view('pages.contact.contact');
    }
    public function dashBord(){
        return view('pages.dashBord.dashBord');
    }
    public function project(){
        return view('pages.project.project');
    }
    public function category(){
        return view('pages.category.category');
    }
}
