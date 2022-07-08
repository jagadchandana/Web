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
        return view('about.aboutus');
    }
    public function contact(){
        return view('contact.contact');
    }
    public function dashBord(){
        return view('dashBord.dashBord');
    }
    public function project(){
        return view('project.project');
    }
    public function category(){
        return view('category.category');
    }
}
