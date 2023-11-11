<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MpatientController extends Controller
{
    public function mpatient(){
        return view('admin.home.mpatient');
}
}
