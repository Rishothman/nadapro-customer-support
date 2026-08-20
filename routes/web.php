<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('customer.home');
});

Route::get('/customer-access', function () {
    return view('customer.auth');
})->name('customer.access');