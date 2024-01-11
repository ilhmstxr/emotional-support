<?php

use App\Http\Controllers\MenuController;
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
    return view('menu');
});


Route::get('/maps', function () {
    return view('maps');
});


Route::get('/janjitemu',function ()  {
    return view('janjitemu');
});


Route::get('/menu', [MenuController::class,'index'])->name('menu');
Route::get('/curhat', [MenuController::class, 'indexCurhat'])->name('curhat');
Route::get('/janjitemu', [MenuController::class, 'indexJT'])->name('janjitemu');
Route::get('/curhatonline', [MenuController::class, 'indexCO'])->name('curhatonline');
Route::get('/psikolog', [MenuController::class, 'indexPsikolog'])->name('psikolog');

// Route::resource('/menu', MenuController::class); 

