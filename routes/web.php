<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\NewsletterController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::resource('/', FrontendController::class);
Route::post('/appointments', [AppointmentController::class, 'store'])->name('appointments.store');
Route::resource('/gallery', GalleryController::class);
Route::post('/newsletter-subscribe', [NewsletterController::class, 'subscribe'])->name('newsletter.subscribe');


// Route::get('/storage-link', function () {
//     // Full path to your storage folder
//     $target = '/home/u236778855/domains/edgedjoinerykitchens.com.au/edgedjoinerykitchens/storage/app/public';

//     // Full path to the location where you want the symlink (public_html)
//     $link = '/home/u236778855/domains/edgedjoinerykitchens.com.au/public_html/storage';

//     // Create the symlink
//     symlink($target, $link);

//     return 'Storage link has been created successfully';
// });

// Route::get('/check-path', function () {
//     return base_path();
// });
