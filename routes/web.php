<?php

use App\Http\Controllers\ProfileController;
use App\Http\Middleware\AdminPrivilege;
use App\Http\Middleware\CustomerPrevilege;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('customers.dashboard');
});
/* ADMIN ROUTE */
Route::get('/dashboard', function () {
    return view('admins.dashboard');
})->middleware(['auth', 'verified', AdminPrivilege::class])->name('admin.dashboard');
/* END ADMIN ROUTE */

/* CUSTOMER ROUTE */
Route::get('/home', function () {
    return view('customers.dashboard');
})->middleware([CustomerPrevilege::class])->name('customer.dashboard');

// Route::get('/home', function () {
//     return view('customers.dashboard');
// })->middleware(['auth', 'verified'])->name('customer.dashboard');

/* END CUSTOMER ROUTE */

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
