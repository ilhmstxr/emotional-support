<?php

use App\Http\Controllers\AuthController;

use App\Http\Controllers\ChatController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/maps', function () {
    return view('maps');
});


Route::get('/janjitemu', function () {
    return view('janjitemu');
});


Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/', [MenuController::class, 'index'])->name('menu');
Route::get('/menu', [MenuController::class, 'index'])->name('menu');
Route::get('/register', [AuthController::class, 'indexRegister'])->name('registerpage');
Route::get('/login', [AuthController::class, 'indexLogin'])->name('loginpage');
Route::get('/curhat', [MenuController::class, 'indexCurhat'])->name('curhat');
// Route::get('/chatify', [MenuController::class, 'indexChat'])->name('chatify');
Route::get('/janjitemu', [MenuController::class, 'indexJT'])->name('janjitemu');
Route::get('/curhatonline', [MenuController::class, 'indexCO'])->name('curhatonline');
Route::get('/psikolog', [MenuController::class, 'indexPsikolog'])->name('psikolog');
Route::get('/profilepsikolog', [MenuController::class, 'indexProfilePsikolog'])->name('profilepsikolog');

Route::get('/countdown', function () {
    return view('/countdown');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('transaction', TransactionController::class);
Route::post('transaction/cek', [TransactionController::class, 'check_order'])->name('transaction.check_order');
// Route::post('transaction/post/{id}',[ TransactionController::class,'check_order'])->name('transaction.check_order');

// Route::resource('/menu', MenuController::class); 
