<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
})->name('home');


// Route::get('/about', function () {
//     return view('about')->name('about');
// });

// Route::get('/service', function () {
//     return view('service');
// })->name('service');

// Route::get('/faq', function () {
//     return view('faq');
// })->name('faq');

// Route::get('/contact', function () {
//     return view('contact');
// })->name('contact');

Route::get('/social_media', function () {
    return view('social_media');
})->name('social_media');


Route::get('/wordpress', function () {
    return view('wordpress');
})->name('wordpress');


Route::get('/wordpress_speed_optz', function () {
    return view('wordpress_speed_optz');
})->name('wordpress_speed_optz');

Route::get('/fix_wordpress', function () {
    return view('fix_wordpress');
})->name('fix_wordpress');

Route::get('/seo', function () {
    return view('seo');
})->name('seo');
