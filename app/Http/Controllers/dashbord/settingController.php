<?php

namespace App\Http\Controllers\dashbord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class settingController extends Controller
{
    public function setting(){
        return view('dashBord.dashBordContent.setting');
    }
}
