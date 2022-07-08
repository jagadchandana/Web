<?php

namespace App\Http\Controllers\dashbord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class calenderController extends Controller
{
    public function calender(){
        return view('pages.dashBord.dashBordContent.Calender');
    }
}
