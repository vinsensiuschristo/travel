<?php

use App\Http\Controllers\MenuController;
use App\Http\Controllers\BookingController;
use Illuminate\Support\Facades\Route;

Route::get('/', [MenuController::class, 'index'])->name('menu.index');
Route::get('/car-rental', [MenuController::class, 'carRental'])->name('menu.car-rental');
Route::get('/about-us', [MenuController::class, 'aboutUs'])->name('menu.about-us');
Route::get('/contact-us', [MenuController::class, 'contactUs'])->name('menu.contact-us');
Route::get('/local-destination', [MenuController::class, 'localDestination'])->name('menu.local-destination');
Route::get('/inter-destination', [MenuController::class, 'interDestination'])->name('menu.inter-destination');


Route::get('/booking', [MenuController::class, 'booking'])->name('menu.booking');

// Detail
Route::get('/destination/bogor-walking-tour', [MenuController::class, 'bogorWalkingTour'])->name('bogor-walking-tour');

Route::post('/booking/sending-email', [BookingController::class, 'sendingEmail'])->name('booking.sending-email');
