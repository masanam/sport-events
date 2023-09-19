<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SportEventController;
use App\Http\Controllers\OrganizerController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::resource('sports', SportEventController::class);
Route::get('sports', [SportEventController::class, 'index'])->name('sports.index');
Route::get('sports/create', [SportEventController::class, 'create'])->name('sports.create');
Route::post('sports', [SportEventController::class, 'store'])->name('sports.store');
Route::get('sports/{id}/edit', [SportEventController::class, 'edit'])->name('sports.edit');
Route::put('sports/{id}', [SportEventController::class, 'update'])->name('sports.update');
Route::delete('sports/{id}', [SportEventController::class, 'destroy'])->name('sports.destroy');

// Route::resource('organizers', OrganizerController::class);
Route::get('organizers', [OrganizerController::class, 'index'])->name('organizers.index');
Route::get('organizers/create', [OrganizerController::class, 'create'])->name('organizers.create');
Route::post('organizers', [OrganizerController::class, 'store'])->name('organizers.store');
Route::get('organizers/{id}/edit', [OrganizerController::class, 'edit'])->name('organizers.edit');
Route::put('organizers/{id}', [OrganizerController::class, 'update'])->name('organizers.update');
Route::delete('organizers/{id}', [OrganizerController::class, 'destroy'])->name('organizers.destroy');

