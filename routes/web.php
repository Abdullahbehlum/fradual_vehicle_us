<?php

use App\Http\Controllers\Checkout_controller;
use App\Http\Controllers\Contact_Controller;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('index');
});

Route::get('/about-us', function () {
    return view('about_us');
});
Route::get('/contact-us', function () {
    return view('contact_us');
});
Route::post('/send/message', [Contact_Controller::class, 'Store'])->name('send_message');
Route::get('/all/message', [Contact_Controller::class, 'index']);
Route::get('/car-history-report', function () {
    return view('reports.car_report');
});
Route::get('/motorbike-history-report', function () {
    return view('reports.bike_report');
});
Route::get('/atv-history-report', function () {
    return view('reports.atv_report');
});
Route::get('/truck-history-report', function () {
    return view('reports.truck_report');
});
Route::get('/boat-history-report', function () {
    return view('reports.boat_report');
});
Route::get('/rv-history-report', function () {
    return view('reports.rv_report');
});

Route::get('/privacy-policy', function () {
    return view('policy.privacy_policy');
});
Route::get('/terms-conditions', function () {
    return view('policy.terms_condition');
});

Route::get('/check-out', function (Request $request) {
    $package_name = $request->query('package');
    $package_price = (float) $request->query('price');
    return view('check_out', compact('package_name', 'package_price'));
});


Route::get('/services', function () {
    return view('all_services');
});


Route::post('/check-out/payment/process', [Checkout_controller::class, 'Process_controller'])->name('process_payment');
