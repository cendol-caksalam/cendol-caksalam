<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.home', ['title' => 'Home | Beranda']);
})->name('home');

Route::get('/about', function () {
    return view('pages.about', ['title' => 'About | Tentang Kami']);
})->name('about');

Route::get('/product', function () {
    return view('pages.product', ['title' => 'Product | Produk Kami']);
})->name('product');

Route::get('/services', function () {
    return view('pages.services',  ['title' => 'Services | Layanan']);
})->name('services');

Route::get('/contact', function () {
    return view('pages.contact',  ['title' => 'Contact | Kontak Kami']);
})->name('contact');
