<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\WeddingController;
use App\Http\Controllers\WishController;
use Illuminate\Support\Facades\Route;

Route::get('/',
    [WeddingController::class, 'index']
)->name('home');

Route::get('/bride-invitation',
    [WeddingController::class, 'brideInvitation']
)->name('bride-home');

Route::get('/invitation/{customer}', [WeddingController::class, 'invitation'])->name('invitation');
Route::get('/attending/{customer}', [WeddingController::class, 'confirm'])->name('confirm');
Route::post('/attending/{customer}', [WeddingController::class, 'attendingResponse'])->name('confirm.post');

Route::get('/dashboard', function () {
    return redirect()->route('customers.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::resource('wish', WishController::class);


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('customers/import', [CustomerController::class, 'importForm'])->name('customers.import');
    Route::post('customers/import', [CustomerController::class, 'import'])->name('customers.import.store');
    Route::resource('customers', CustomerController::class);
});

require __DIR__.'/auth.php';
