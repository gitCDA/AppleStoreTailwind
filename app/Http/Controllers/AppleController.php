<?php

namespace App\Http\Controllers;

use App\Models\Apple;
use Illuminate\Http\Request;

class AppleController extends Controller
{
    //
    public function index(){

        $apples = Apple::all() ;
        return view("index", compact("apples")) ;
    }
}