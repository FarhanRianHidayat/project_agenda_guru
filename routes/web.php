<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendaController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\KelasController;

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

// Route::get('/login', [AgendaController::class, 'index'])->name('agenda');

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::middleware(['auth', 'cekleveluser:user'])->group(function () {
    //     Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');
    // });
    
    // agenda
    // Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');
    


Route::get('/agenda', [AgendaController::class, 'index'])->name('agenda');

Route::get('/tambahagenda', [AgendaController::class, 'create'])->name('tambahagenda');

Route::post('/insertdataagenda', [AgendaController::class, 'store'])->name('insertdataagenda');

Route::get('/tampilanagenda/{id}', [AgendaController::class, 'tampilan'])->name('tampilanagenda');

Route::put('/updatedataagenda/{id}', [AgendaController::class, 'update'])->name('updatedataagenda');

Route::delete('/deletedataagenda/{id}', [AgendaController::class, 'destroy'])->name('deletedataagenda');

// guru
Route::get('/guru', [GuruController::class, 'index'])->name('guru');

Route::get('/tambahguru', [GuruController::class, 'create'])->name('tambahguru');

Route::post('/insertdataguru', [GuruController::class, 'store'])->name('insertdataguru');

Route::get('/tampilanguru/{id}', [GuruController::class, 'tampilan'])->name('tampilanguru');

Route::put('/updatedataguru/{id}', [GuruController::class, 'update'])->name('updatedataguru');

Route::delete('/deletedataguru/{id}', [GuruController::class, 'destroy'])->name('deletedataguru');

// kelas
Route::get('/kelas', [KelasController::class, 'index'])->name('kelas');

Route::get('/tambahkelas', [KelasController::class, 'create'])->name('tambahkelas');

Route::post('/insertdatakelas', [KelasController::class, 'store'])->name('insertdatakelas');

Route::get('/tampilankelas/{id}', [KelasController::class, 'tampilan'])->name('tampilankelas');

Route::put('/updatedatakelas/{id}', [KelasController::class, 'update'])->name('updatedatakelas');

Route::delete('/deletedatakelas/{id}', [KelasController::class, 'destroy'])->name('deletedatakkelas');




Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('adminn', function () { return view('adminn'); })->middleware('checkRole:admin');
Route::get('guruu', function () { return view('guruu'); })->middleware(['checkRole:guruu,admin']);
