<?php

use App\Http\Controllers\ExecutiveController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\WeeklyActivityController;
use App\Http\Controllers\EventsController;
use App\Http\Controllers\TestimonyController;
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
Route::get('/testimonies', [Controller::class, 'testimonies'])->name('testimonies');
Route::get('/gallery', [Controller::class, 'gallery'])->name('gallery');
Route::get('/departments', [Controller::class, 'departments'])->name('departments');
Route::get('/executives', [Controller::class, 'executives'])->name('executives');
Route::post('/executives', [Controller::class, 'executives_for_batch'])->name('executives_for_batch');
Route::get('/contact', [Controller::class, 'contact'])->name('contact');
Route::get('/donate', [Controller::class, 'donate'])->name('donate');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::middleware('auth')->group(function () {
    Route::prefix('cms')->group(function () {
        Route::get('/weekly_activities', [WeeklyActivityController::class, 'activities'])->name('weekly_activities');
        Route::put('/weekly_activities/{weeklyActivity}', [WeeklyActivityController::class, 'update']);

        Route::get('/events-news', [EventsController::class, 'events'])->name('news-events');
        Route::post('/events-news', [EventsController::class, 'store'])->name('add-event');
        Route::put('/events-news/{event}', [EventsController::class, 'update']);
        Route::delete('/events-news/{event}', [EventsController::class, 'destroy']);

        Route::get('/testimonies', [TestimonyController::class, 'all_testimonies'])->name('all_testimonies');
        Route::post('/testimonies', [TestimonyController::class, 'store'])->name('add_testimony');
        Route::put('/testimonies/{testimony}', [TestimonyController::class, 'update']);
        Route::delete('/testimonies/{testimony}', [TestimonyController::class, 'destroy']);

        Route::get('/gallery', [GalleryController::class, 'show_albums'])->name('show_albums');
        Route::post('/gallery', [GalleryController::class, 'store'])->name('add_album');
        Route::put('/gallery/{gallery}', [GalleryController::class, 'update']);
        Route::delete('/gallery/{gallery}', [GalleryController::class, 'destroy']);

        Route::get('/executives', [ExecutiveController::class, 'get_executives'])->name('get_executives');
        Route::get('/executives/{id}', [ExecutiveController::class, 'get_executives_of_a_batch']);
        Route::post('/executives/add-year-group', [ExecutiveController::class, 'add_year_group'])->name('add_year_group');
        Route::post('/executives', [ExecutiveController::class, 'store'])->name('add_executive');
        Route::put('/executives/{executive}', [ExecutiveController::class, 'update']);
        Route::delete('/executives/{executive}', [ExecutiveController::class, 'destroy']);
    });
});
