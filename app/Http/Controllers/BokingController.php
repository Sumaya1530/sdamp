<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bokingcontroller extends Controller
{
    public function book(){
        return view('list');
    }
}
