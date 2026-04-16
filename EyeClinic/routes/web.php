<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('services', function () {
    return view('services');
})->name('services');

Route::get('technology', function () {
    return view('technology');
})->name('technology');

Route::get('specialists', function () {
    return view('specialists');
})->name('specialists');

Route::get('experience', function () {
    return view('experience');
})->name('experience');

Route::get('contact', function () {
    return view('contact');
})->name('contact');