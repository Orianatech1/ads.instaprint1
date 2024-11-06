<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FixScanController extends Controller
{
    public function index(){
        return view('pages.fix_scan');
    }
}
