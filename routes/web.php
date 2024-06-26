<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\BookingController;

// Public route for the homepage
Route::get('/', function () {
    return view('index');
});

// Custom login route
Route::post('/login', function (Request $request) {
    // Perform login logic here (you might need to adjust this based on your authentication setup)
    if (Auth::attempt($request->only('email', 'password'))) {
        // Redirect to the bookings index page after successful login
        return redirect()->route('bookings.index');
    }

    // Redirect back to the login page if authentication fails
    return redirect()->route('login')->with('error', 'Invalid credentials');
})->name('login');

// Routes that require authentication
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    // Dashboard route (you can remove this if it's not needed)
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    // Bookings resource routes
    Route::resource('bookings', BookingController::class)->except(['index']);
    Route::get('/bookings', [BookingController::class, 'index'])->name('bookings.index');


});

use App\Http\Controllers\FeedbackController;

Route::get('/feedback', [FeedbackController::class, 'index'])->name('feedback.index');
Route::post('/feedback', [FeedbackController::class, 'store']);
Route::get('/feedback/{id}', [FeedbackController::class, 'show']);
Route::put('/feedback/{id}', [FeedbackController::class, 'update']);
Route::delete('/feedback/{id}', [FeedbackController::class, 'destroy']);



