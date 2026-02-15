<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'them.starter')->name('home');

Route::view('/about', 'them.about')->name('about');

Route::view('/services', 'them.service')->name('services');

Route::view('/pricing', 'them.pricing')->name('pricing');

Route::view('/get-a-quote', 'them.get-a-quote')->name('get-quote');

Route::view('/service-details', 'them.service-details')->name('service-details');

Route::view('/contact', 'them.contact')->name('contact');
