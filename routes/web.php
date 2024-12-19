<?php

use App\Http\Controllers\admin\AboutController;
use App\Http\Controllers\admin\CoreController;
use App\Http\Controllers\admin\CoreInfoController;
use App\Http\Controllers\admin\DashboardController;
use App\Http\Controllers\admin\Introductioncontroller;
use App\Http\Controllers\admin\OtherController;
use App\Http\Controllers\admin\PortfolioController;
use App\Http\Controllers\admin\ServiceController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceInfoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('frontend.index');
});

Route::middleware(['auth', 'verified'])->group(function () {

    Route::get('/dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');
    Route::resource('intro', Introductioncontroller::class);

    Route::resource('about', AboutController::class);
   // Route::post('/biography-update', [AboutController::class, 'biographyUpdate'])->name('bioupdate');
    //Route::post('/education-update', [AboutController::class, 'educationUpdate'])->name('eduupdate');
   // Route::post('/experience-update', [AboutController::class, 'experienceUpdate'])->name('expupdate');
   // Route::post('/technology-update', [AboutController::class, 'technologyUpdate'])->name('techupdate');





    Route::resource('service', ServiceController::class);

    Route::resource('service-info', ServiceInfoController::class);


    Route::resource('portfolio', PortfolioController::class);
    Route::post('portfolio-store', [PortfolioController::class, 'portfolioStore'])->name('portfolioStore');


    Route::resource('core', CoreController::class);
    Route::resource('core-info', CoreInfoController::class);

    Route::resource('other-info', OtherController::class);

   // Route::get('/introduction', [])


});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
