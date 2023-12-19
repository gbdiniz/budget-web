<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;
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

Route::get('/dashboard', [Controller::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/criar', [Controller::class, 'create'])->name('budget-create');

Route::post('/', [Controller::class, 'store'])->name('budget-store');

Route::delete('/{id}', [Controller::class, 'destroy'])->where('id', '[0-9]+')->name('budget-destroy');

Route::get('/{id}/edit', [Controller::class, 'edit'])->where('id', '[0-9]+')->name('budget-edit');

Route::put('/{id}', [Controller::class, 'update'])->where('id', '[0-9]+')->name('budget-update');
require __DIR__ . '/auth.php';
