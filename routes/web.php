<?php

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

Route::get('/',[\App\Http\Controllers\welcomecontroller::class, 'index']);
Route::get('events',[\App\Http\Controllers\EventsController::class,'index'])->name('events.index');
Route::view('about', 'about.index')->name('about.index');
Route::view('about/book', 'about.book')->name('about.book');
Route::view('about/faq', 'about.faq')->name('about.faq');
Route::view('about/privacy', 'about.privacy')->name('about.privacy');
Route::view('about/tos', 'about.tos')->name('about.tos');
Route::view('contact', 'contact.index')->name('contact.index');
Route::get('languages', [\App\Http\Controllers\LanguagesController::class,'index'])->name('languages.index');
Route::get('locations', [\App\Http\Controllers\LocationController::class,'index'])->name('locations.index');
Route::get('map', [\App\Http\Controllers\MapsController::class,'index'])->name('maps.index');
