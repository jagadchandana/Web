<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CssController extends Controller
{
    public function css(){
        return view('pages.category.css.css');
    }
}
