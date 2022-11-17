<?php

use App\Http\Controllers\LibraryController;
use Illuminate\Support\Facades\Route;
use App\Models\Writers;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [LibraryController::class, 'index']);

Route::get('/index', [LibraryController::class, 'index']);

Route::get('/index/{writer}', [LibraryController::class, 'show']);

Route::get('/tentangkita', [LibraryController::class, 'about']);

Route::get('/kontakkita', [LibraryController::class, 'contact']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
