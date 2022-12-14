<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonalInfoController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::get('/persons',[PersonalInfoController::class, 'show'])->name('persons');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/form', [PersonalInfoController::class, 'form'])->name('form');
    Route::post('/add', [PersonalInfoController::class, 'addPerson'])->name('add');
    Route::get('/single/{id}', [PersonalInfoController::class, 'singleview'])->name('single');
    Route::get('/edit/{id}', [PersonalInfoController::class, 'edit'])->name('edit');
    Route::patch('/update/{id}', [PersonalInfoController::class, 'update'])->name('update');
    Route::delete('/delete/{id}', [PersonalInfoController::class, 'delete'])->name('delete');
});

require __DIR__.'/auth.php';
