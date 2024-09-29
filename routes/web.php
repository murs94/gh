<?php

use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

//login/logout routes
Auth::routes();

Route::middleware(['auth'])->group(function (){
    Route::get('/', App\Livewire\Dashboard::class)->name(name: 'dashboard.index'); //home
});

//prefix -- to be use
Route::prefix('reservation')->middleware(['auth'])->group(function () {
    Route::get('/', App\Livewire\Reservation::class)->name('reservation.index');
});

Route::prefix('customer')->middleware(['auth'])->group(function () {
    Route::get('/', App\Livewire\Customers\Customers::class)->name('customers.index');
    Route::get('create', App\Livewire\Customers\Form::class)->name('customers.create');
});