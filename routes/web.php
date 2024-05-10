<?php

use App\Http\Controllers\Guests\TrainController;
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

Route::get('/', [TrainController::class, 'index'])->name('home.index');
Route::get('/{train}', [TrainController::class, 'show'])->name('home.show');

