<?php

use App\Http\Controllers\Back\Article\CreatController;
use App\Http\Controllers\Back\Article\ListController;
use App\Http\Controllers\Back\Article\NewsletterController;
use App\Http\Controllers\Back\DashbController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('front.home')->name('home');
});



Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function () {
    Route::get('/dashboard', [DashbController::class, 'index'])->name('my.dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    
    Route::get('/create',[CreatController::class,'index'])->name('article.create');
    Route::post('/store',[CreatController::class,'store'])->name('article.store');
    Route::get('/edit',[CreatController::class,'edit'])->name('article.edit');



    Route::get('/list',[ListController::class,'index'])->name('article.list');
    Route::get('/list/{ref}/activeted',[ListController::class,'active'])->name('article.list.activeted');
    // Route::post('/list/{ref}/activeted',[ListController::class,'active'])->name('article.list.activeted');
    Route::get('/list/{ref}/desactiveted',[ListController::class,'desactive'])->name('article.list.desactiveted');
    Route::get('/list/{ref}/priority',[ListController::class,'priority'])->name('article.list.priority');


    Route::get('/newsletter',[NewsletterController::class,'index'])->name('newsletter.list');






});

require __DIR__.'/auth.php';
