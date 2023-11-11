<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AmedicineController extends Controller
{
    public function amedicine(){
        return view('admin.home.amedicine');
}
}
