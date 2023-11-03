<?php

use App\Http\Controllers\destination;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\EmailController;
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

Route::get(('/'), [FrontController::class,'home'])->name('home');
Route::get('/about', [FrontController::class,'about'])->name('about');
Route::get('/services', [FrontController::class,'services'])->name('services');
Route::get('/packages', [FrontController::class,'packages'])->name('packages');
Route::get('/contact', [FrontController::class,'contact'])->name('contact');
Route::post('/subscription', [FrontController::class, 'subscription'])->name('subscription');



Route::post('/send-email',[EmailController::class,'index'])->name('sendmail');


// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});




Route::get('/dashboard', function() {
    return view('admin.views.index');
})->name('dashboard');

Route::resource('destination', 'App\Http\Controllers\DestinationController');
Route::resource('package','App\Http\Controllers\PackageController');

require __DIR__.'/auth.php';
