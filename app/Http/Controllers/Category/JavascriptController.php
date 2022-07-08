<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class JavascriptController extends Controller
{
    public function javaScript(){
        return view ('pages.category.javaScript.javaScript');
    }
}
