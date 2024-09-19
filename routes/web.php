<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//login/logout routes
Auth::routes();

Route::middleware(['auth'])->group(function (){
    Route::get('/', App\Livewire\Dashboard::class)->name(name: 'dashboard'); //home
});

//prefix -- to be use
Route::prefix('reservation')->middleware(['auth'])->group(function () {
    Route::get('/', App\Livewire\Reservation::class);
});
