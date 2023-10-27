<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MbookingController extends Controller
{
    public function mbooking(){
        return view('admin.home.mbooking');
}
}