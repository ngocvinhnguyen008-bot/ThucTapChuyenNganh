<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\UserManagementController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ERDiagramController;
use App\Http\Controllers\Admin\JoinController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('home');

Route::get('/product', function () {
    return view('product');
})->name('product');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/add_to_wishlist', function () {
    return view('add_to_wishlist');
})->name('add_to_wishlist');

Route::get('/cart', function () {
    return view('cart');
})->name('cart');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/men', function () {
    return view('men');
})->name('men');

Route::get('/order', function () {
    return view('order');
})->name('order');

Route::get('/women', function () {
    return view('women');
})->name('women');

Route::get('/admin', function () {
    return view('admin');
})->name('admin');

// Admin pages for managing courses are defined inside the admin middleware group below.

Route::get('/admin/users', [UserManagementController::class, 'index'])->name('admin.users');

// Auth Routes - Guest Middleware (chỉ cho người chưa đăng nhập)
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'create'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');

    Route::get('/register', [RegisterController::class, 'create'])->name('register');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
});

// Logout Route
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout')->middleware('auth');

// Protected Routes - Auth Middleware (yêu cầu đăng nhập)
Route::middleware('auth')->group(function () {
    Route::get('/profile', function () {
        return view('profile');
    })->name('profile');

    Route::get('/my-courses', function () {
        return view('my-courses');
    })->name('my-courses');
});

// User Management Routes (Admin)
Route::middleware('auth')->prefix('admin')->group(function () {
    // Admin Dashboard
    Route::get('/', function () {
        return view('admin');
    })->name('admin.dashboard');
    
    // ER Diagram Route
    Route::get('er-diagram', [ERDiagramController::class, 'index'])->name('admin.er-diagram');
    
    // Join Tables Route
    Route::get('join-tables', [JoinController::class, 'index'])->name('admin.join-tables');
    
    // Categories (used as Courses) CRUD
    Route::get('category', [CategoryController::class, 'index'])->name('admin.categories');
    Route::get('product', [CategoryController::class, 'create'])->name('admin.products.create');
    Route::post('product', [CategoryController::class, 'store'])->name('admin.products.store');
    Route::get('category/{id}/edit', [CategoryController::class, 'edit'])->name('admin.categories.edit');
    Route::put('category/{id}', [CategoryController::class, 'update'])->name('admin.categories.update');
    Route::delete('category/{id}', [CategoryController::class, 'destroy'])->name('admin.categories.destroy');
    // Student Management
    Route::get('students/create', [UserManagementController::class, 'createStudent'])->name('students.create');
    Route::post('students', [UserManagementController::class, 'storeStudent'])->name('students.store');
    Route::get('students/{id}/edit', [UserManagementController::class, 'editStudent'])->name('students.edit');
    Route::put('students/{id}', [UserManagementController::class, 'updateStudent'])->name('students.update');
    Route::delete('students/{id}', [UserManagementController::class, 'destroyStudent'])->name('students.destroy');

    // Teacher Management
    Route::get('teachers/create', [UserManagementController::class, 'createTeacher'])->name('teachers.create');
    Route::post('teachers', [UserManagementController::class, 'storeTeacher'])->name('teachers.store');
    Route::get('teachers/{id}/edit', [UserManagementController::class, 'editTeacher'])->name('teachers.edit');
    Route::put('teachers/{id}', [UserManagementController::class, 'updateTeacher'])->name('teachers.update');
    Route::delete('teachers/{id}', [UserManagementController::class, 'destroyTeacher'])->name('teachers.destroy');
});
