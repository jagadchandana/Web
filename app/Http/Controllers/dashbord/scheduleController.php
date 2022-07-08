<?php

namespace App\Http\Controllers\dashbord;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class scheduleController extends Controller
{
    public function schedule(){
        return view('pages.dashBord.dashBordContent.Schedule');
    }
}
