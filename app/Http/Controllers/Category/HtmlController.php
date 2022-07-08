<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HtmlController extends Controller
{
    public function html(){
        return view('pages.category.html.html');
    }
}
