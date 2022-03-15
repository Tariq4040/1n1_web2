<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class hostingPageController extends Controller
{
    public function hosting(){
        return view('hosting');
    }
}
