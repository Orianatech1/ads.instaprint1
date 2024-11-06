<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckWController extends Controller
{
    public function index(){
        return view('pages.check_w');
    }
}
