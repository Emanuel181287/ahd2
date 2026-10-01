<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Ahd2Controller;

Route::get('/', function () {
    return redirect()->route('ahd2s.index');
});

Route::resource('ahd2s', Ahd2Controller::class);
