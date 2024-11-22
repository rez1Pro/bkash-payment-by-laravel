<?php

use Illuminate\Support\Facades\Route;
use Rez1pro\LaraBkash\Facades\LaraBkash;

Route::get('/', function () {

    return LaraBkash::checkout(100, '1234567890');

    return view('welcome');
});
