<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OppsController extends Controller
{
    public function index(){
        return view('pages.opps');
    }
}
