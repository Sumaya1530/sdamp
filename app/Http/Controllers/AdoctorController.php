<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdoctorController extends Controller
{
    public function adoctor(){
        return view('admin.home.adoctor');
}
}
