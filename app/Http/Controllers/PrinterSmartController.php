<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrinterSmartController extends Controller
{
    public function index(){
        return view('pages.printer_smart');
    }
}
