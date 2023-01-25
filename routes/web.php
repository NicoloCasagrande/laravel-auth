<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PostController;

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

Route::get('/', function () {
    return view('welcome');
});

//Tutte le rotte protette che chiedono l'autenticazione
Route::middleware('auth')->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', function () {
        return view('admin.dashboard');
    })->name('dashboard');

    //collego la risorsa Post alle rotte, cosi che vengano generate da laravel
    Route::resource('posts', PostController::class);
});

//Tutte le rotte per l'autenticazione
require __DIR__.'/auth.php';