<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\MaterialController;

Route::resource('materials', MaterialController::class);
Route::post('/materials', [MaterialController::class, 'store'])->name('materials.store');
Route::delete('/materials/{material}', [MaterialController::class, 'destroy'])->name('materials.destroy');
