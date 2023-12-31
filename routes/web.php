<?php

use App\Http\Controllers\CarPaintController;
use Illuminate\Support\Facades\Route;

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
    return view('dashboard');
})->name('dashboard');

Route::get('/manage-cars', function () {
    return view('manage_cars');
})->name('manage_cars');

Route::post('/save-paint-job', [CarPaintController::class, 'store'])->name('paint-job.store');
