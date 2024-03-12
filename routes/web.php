<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\ReportController;

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
    return view('profile');
});

Route::get('/registerpage', function () {
    return view('registerpage');
});

Route::get('/login', function () {
    return view('loginpage');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/profile', [ProfileController::class, 'index'])->name('profile.index');
Route::patch('/profile/{id}', [ProfileController::class, 'update'])->name('profile.update');

require __DIR__.'/auth.php';
require __DIR__.'/adminauth.php';

Route::get('/admin/auth/login', function () {
    return view('admin.auth.login');
})->middleware(['auth:admin', 'verified'])->name('admin.dashboard');

Route::get('/import', function () {
    return view('import');
});

Route::get('/dashboardracing', [PagesController::class, 'dashboardracing'])->name('dashboardracing');
Route::get('/dashboardsales', [PagesController::class, 'dashboardsales'])->name('dashboardsales');
Route::get('/report', [ReportController::class, 'report'])->name('report');

Route::post('/import', [ReportController::class, 'import'])->name('import');
Route::post('/importsales', [SalesReportController::class, 'importsales'])->name('importsales');
Route::post('/importsales', [SalesAchReportController::class, 'importsalesach'])->name('importsalesach');