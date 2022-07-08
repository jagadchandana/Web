<?php

namespace App\Http\Controllers\dashbord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class taskController extends Controller
{
    public function task(){
        return view('dashBord.dashBordContent.Task');
    }
}
