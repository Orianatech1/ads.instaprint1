<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/check_w', function () {
    return view('pages.check_w');
});
Route::get('/find_printer', function () {
    return view('pages.find_printer');
});
Route::get('/fix_scan', function () {
    return view('pages.fix_scan');
});
Route::get('/install_driver', function () {
    return view('pages.install_driver');
});
Route::get('/printer_smart', function () {
    return view('pages.printer_smart');
});
Route::get('/opps', function () {
    return view('pages.opps');
});
