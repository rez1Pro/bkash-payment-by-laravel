<?php

use Illuminate\Support\Facades\Route;
use Rez1pro\LaraBkash\Facades\LaraBkash;

Route::get('/', function () {

    return LaraBkash::index();

    return view('welcome');
});
