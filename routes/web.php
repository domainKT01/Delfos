<?php

use App\Http\Controllers\clients\ClientsController;
use App\Http\Controllers\inCome\InComeController;
use App\Http\Controllers\rooms\RoomsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\status\StatusController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});

Route::resource('status', StatusController::class)->names('status');
Route::resource('rooms', RoomsController::class)->names('rooms');
Route::resource('clients', ClientsController::class)->names('clients');
Route::resource('inComes', InComeController::class)->names('inComes');
Route::post('create_in', [InComeController::class, 'create_in'])->name('create_in');
