<?php

use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

//Route::get('/', function () {
//    return view("index");
//});
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
        'events' => \App\Models\Event::with('tags','images')->take(24)->orderByDesc('happened_at')->get(),
        'tags' => \App\Models\Tag::all()
    ]);
});
Route::get("blade",function (){
   return view("index");
});

Route::get('/event/create',function (){
    dd('daasd');
});

Route::controller(\App\Http\Controllers\EventController::class)->group(function (){
    Route::get('/event/{event:id}','show')->name('event.show');
    Route::get('/event/create','create')->name('event.create');
    Route::post('/event','store')->name('event.store');
    Route::put('/event/{event:id}','update')->name('event.update');
    Route::delete('/event/{event:id}','destroy')->name('event.delete');
});


Route::controller(\App\Http\Controllers\TagController::class)->group(function (){
    Route::post('/tags','store')->name('tags.store');
    Route::delete('/tags/{event:id}','destroy')->name('tags.delete');
});


Route::controller(\App\Http\Controllers\ImageController::class)->group(function (){
    Route::post('/images','create')->name('images.store');
//    Route::put('/images/{images:id}','update')->name('images.update');
    Route::delete('/images/{images:id}','destroy')->name('images.delete');
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

require __DIR__.'/auth.php';
