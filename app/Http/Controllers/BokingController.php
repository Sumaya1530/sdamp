<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BokingController extends Controller
{
    public function list(){    
     return view('list');
    }
}
