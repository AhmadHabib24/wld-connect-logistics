<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/services', function () {
    return view('services');
})->name('services');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

// Service detail routes
Route::get('/services/palletizing', function () {
    return view('services.palletizing');
})->name('services.palletizing');

Route::get('/services/warehousing', function () {
    return view('services.warehousing');
})->name('services.warehousing');

Route::get('/services/courier-express', function () {
    return view('services.courier-express');
})->name('services.courier-express');

Route::get('/services/freight-cargo', function () {
    return view('services.freight-cargo');
})->name('services.freight-cargo');

Route::get('/services/supply-chain', function () {
    return view('services.supply-chain');
})->name('services.supply-chain');

Route::get('/services/shipping', function () {
    return view('services.shipping');
})->name('services.shipping');

Route::get('/services/distribution', function () {
    return view('services.distribution');
})->name('services.distribution');

Route::get('/services/customs-clearance', function () {
    return view('services.customs-clearance');
})->name('services.customs-clearance');

Route::get('/services/last-mile', function () {
    return view('services.last-mile');
})->name('services.last-mile');
Route::get('/privacy-policy', function () {
    return view('legal.privacy-policy');
})->name('privacy-policy');

Route::get('/terms-of-service', function () {
    return view('legal.terms-of-service');
})->name('terms-of-service');