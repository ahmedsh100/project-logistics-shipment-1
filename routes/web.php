<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'them.starter')->name('home');

Route::view('/about', 'them.about')->name('about');

Route::view('/services', 'them.service')->name('services');

Route::view('/pricing', 'them.pricing')->name('pricing');

Route::view('/get-a-quote', 'them.get-a-quote')->name('get-quote');

Route::view('/service-details', 'them.service-details')->name('service-details');

Route::view('/contact', 'them.contact')->name('contact');

Route::view('/shipments', 'dashboard.shipments.index')->name('admin.shipments.index');

Route::prefix('admin')->group(function () {
    Route::view('/', 'dashboard.dashboard.index')->name('admin.dashboard');
    Route::view('/shipments', 'dashboard.shipments.index')->name('admin.shipments.index');
    Route::view('/shipments/create', 'dashboard.shipments.create')->name('admin.shipments.create');
    Route::get('/shipments/{tracking}', function () {
        return view('dashboard.shipments.show');
    })->name('admin.shipments.show');
    Route::get('/shipments/{tracking}/edit', function () {
        return view('dashboard.shipments.edit');
    })->name('admin.shipments.edit');

    Route::view('/users', 'dashboard.users.index')->name('admin.users.index');
    Route::view('/users/create', 'dashboard.users.create')->name('admin.users.create');
    Route::get('/users/{id}', function () {
        return view('dashboard.users.show');
    })->name('admin.users.show');
    Route::get('/users/{id}/edit', function () {
        return view('dashboard.users.edit');
    })->name('admin.users.edit');

    Route::view('/messages', 'dashboard.messages.index')->name('admin.messages.index');
    Route::view('/reports', 'dashboard.reports.index')->name('admin.reports.index');
    Route::view('/logs', 'dashboard.logs.index')->name('admin.logs.index');
});
