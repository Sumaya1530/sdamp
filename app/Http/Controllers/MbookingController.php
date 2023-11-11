<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mbooking;


class MbookingController extends Controller
{
    public function mbooking(){
        $mbooking = Mbooking::all();
        return view('admin.home.mbooking', compact('mbooking'));
}
        
}