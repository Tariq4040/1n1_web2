<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class servicePageController extends Controller
{
    public function services(){
        return view('services');
    }
}
