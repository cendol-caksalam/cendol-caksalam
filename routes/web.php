<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

Route::get('/', function () {
    return view('pages.home', ['title' => 'Home | Beranda']);
})->name('home');

Route::get('/about', function () {
    return view('pages.about', ['title' => 'About | Tentang Kami']);
})->name('about');

Route::get('/product', [ProductController::class, 'viewProduct'])->name('product');

Route::get('/services', function () {
    return view('pages.services',  ['title' => 'Services | Layanan']);
})->name('services');

Route::get('/contact', function () {
    return view('pages.contact',  ['title' => 'Contact | Kontak Kami']);
})->name('contact');