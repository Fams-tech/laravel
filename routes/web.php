<?php

use App\Models\Formation;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ApprenantController;
use App\Http\Controllers\FormationController;

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

// Route::get('/home',function(){
//     return view('home');
// });
Route::get('/home',[HomeController::class,'index']);

Route::get('/apprenant',[ApprenantController::class,'index']);
Route::post('/storeapprenant', [ApprenantController::class, 'store'])->name('enregistrerApprenant');
Route::get('/listeApprenants',[ApprenantController::class,'listeApprenants'])->name('listeApprenants');
Route::get('/formation',[FormationController::class,'index']);
Route::post('/storeformation',[FormationController::class, 'store'])->name('enregistrerFormation');
Route::get('/listeFormations',[FormationController::class,'listeFormations'])->name('listeFormations');