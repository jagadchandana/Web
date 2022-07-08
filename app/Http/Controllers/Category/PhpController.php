<?php

namespace App\Http\Controllers\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PhpController extends Controller
{
    public function php(){
        return view('category.php.php');
    }
}
