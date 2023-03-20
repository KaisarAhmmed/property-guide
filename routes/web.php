<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PropertyController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization as FacadesLaravelLocalization;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['prefix' => FacadesLaravelLocalization::setLocale()], function () {
    Route::get('/', [HomeController::class, 'home'])->name('home');
    Route::get('/property/{id}', [PropertyController::class, 'single'])->name('single-property');
    Route::get('/properties', [PropertyController::class, 'index'])->name('properties');
    Route::get('/page/{slug}', [PageController::class, 'single'])->name('page');
    Route::post('/property-inquiry/{id}', [ContactController::class, 'propertyInquiry'])->name('property-inquiry');
});


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard-index');
    Route::get('/dashboard/properties', [DashboardController::class, 'properties'])->name('dashboard-properties');
    Route::get('/dashboard/add-property', [DashboardController::class, 'addProperty'])->name('add-property');
});

require __DIR__ . '/auth.php';
