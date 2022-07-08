<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AngularContrller extends Controller
{
    public function angular(){
        return view('pages.project.Angular.angular');
    }
}
