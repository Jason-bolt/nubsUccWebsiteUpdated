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

Route::get('/', [Controller::class, 'index'])->name('home');
Route::get('/about', [Controller::class, 'about'])->name('about');
Route::get('/news_events', [Controller::class, 'news_events'])->name('news_events');
Route::get('/gallery', [Controller::class, 'gallery'])->name('gallery');
Route::get('/departments', [Controller::class, 'departments'])->name('departments');
Route::get('/executives', [Controller::class, 'executives'])->name('executives');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/donate', [Controller::class, 'donate'])->name('donate');

