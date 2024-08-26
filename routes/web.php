<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarController;
use App\Http\Controllers\HotelController;

//car
Route::get('cars_execl', [CarController::class, 'excel'])->name('cars.excel');

Route::resource('cars', CarController::class);

Route::get('/', function () {

    // $url = route('cars.index');
    // dd($url);
    // echo "123";
    // return redirect('/cars');
    return redirect()->route('hotels.index');
});

Route::get('/child', function () {
    return view('child');
});

// Route::get('/f1', function () {
//     return view('hotel.f1');
// })->name('hotel_f1');

// Route::get('/f2', function () {
//     return view('hotel.f2');
// })->name('hotel_f2');

// Route::get('/f3', function () {
//     return view('hotel.f3');
// })->name('hotel_f3');

Route::get('/hotels_f1', [HotelController::class, 'f1'])->name('hotels_f1');
Route::get('/hotels_f2', [HotelController::class, 'f2'])->name('hotels_f2');
Route::get('/hotels_f3', [HotelController::class, 'f3'])->name('hotels_f3');
Route::resource('hotels', HotelController::class);
