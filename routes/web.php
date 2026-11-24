<?php

use App\Models\Room;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes - Tubes IPL Kelompok 4 (koStay)
|--------------------------------------------------------------------------
| Sistem Manajemen & Pembayaran Kost (koStay)
*/

Route::get('/', function () {
    $standarRooms = Room::where('room_type', 'Standar')->orderBy('room_number')->get();
    $eksklusifRooms = Room::where('room_type', 'Eksklusif')->orderBy('room_number')->get();
    return view('landing', compact('standarRooms', 'eksklusifRooms'));
})->name('home');
