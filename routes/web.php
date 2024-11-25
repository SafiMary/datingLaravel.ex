<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\FindUserController;
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
    return view('home');
});
Route::get('/', [MainController::class, 'home'])->name('home');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/mycabinet', [UserController::class, 'mycabinet'])->name('mycabinet');
    Route::post('/mycabinet', [UserController::class,'update_avatar'])->name('update_avatar');
    Route::put('/mycabinet', [UserController::class,'update_avatar'])->name('update_avatar');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/search', [SearchController::class, 'search'])->name('search');
    Route::post('/search', [SearchController::class,'searchUser'])->name('searchUser');
    Route::put('/search', [SearchController::class,'searchUser'])->name('searchUser');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/findUsers', [FindUserController::class, 'view'])->name('view');
   
    
});

Route::get('mycabinet/{id}', function ($id) {
    return 'User '.$id;
  });



require __DIR__.'/auth.php';
