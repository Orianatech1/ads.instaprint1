<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FindPrinterController extends Controller
{
    public function index(){
        return view('pages.find_printer');
    }
}
