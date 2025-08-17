<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;

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
    return view('welcome');
});
Route::get('/', fn()=>view('home'))->name('home');
Route::get('/prices', fn()=>view('prices'))->name('prices');
Route::get('/policy', fn()=>view('policy'))->name('policy');
Route::post('/lead', [LeadController::class,'store'])->name('lead.store');