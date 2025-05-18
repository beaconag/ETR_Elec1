<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Middleware\AdminPrivilege;
use App\Http\Middleware\CustomerPrevilege;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('customer.dashboard');
});


/* ========== ADMIN ROUTE ========== */

Route::middleware(['auth', 'verified', AdminPrivilege::class])->group(function () {
    Route::get('/admin/home', function () {
        return view('admins.dashboard');
    })->name('admin.dashboard');

    /* PRODUCTS ROUTE */
    Route::get('/admin/products', function () {
        return view('admins.products.index');
    })->name('admin.products');

    Route::resource('/products', ProductController::class);
    /* END OF PRODUCTS ROUTE */

    Route::get('/admin/categories', function () {
        return view('admins.categories');
    })->name('admin.categories');

    Route::get('/admin/orders', function () {
        return view('admins.orders');
    })->name('admin.orders');

    Route::get('/admin/reports', function () {
        return view('admins.reports');
    })->name('admin.reports');

    Route::get('/admin/discounts', function () {
        return view('admins.discounts');
    })->name('admin.discounts');

    /* USERS ROUTE */
    Route::get('/admin/users', function () {
        return view('admins.users');
    })->name('admin.users');
    /* END OF USERS ROUTE */
});

// Route::get('/dashboard', function () {
//     return view('admins.dashboard');
// })->middleware(['auth', 'verified', AdminPrivilege::class])->name('admin.dashboard');

/* ========== END ADMIN ROUTE ========== */


/* ========== CUSTOMER ROUTE ========== */

Route::middleware([CustomerPrevilege::class])->group(function () {
    Route::get('/home', function () {
        return view('customers.dashboard');
    })->name('customer.dashboard');

    Route::get('/about', function () {
    return view('about');
    })->name('about');

    Route::get('/contact', function () {
        return view('contact');
    })->name('contact');

    Route::get('/faqs', function () {
        return view('faqs');
    })->name('faqs');
});

/* ========== END CUSTOMER ROUTE ========== */


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__ . '/auth.php';
