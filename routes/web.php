<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsController;

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

//ici on n'a pas besoin de définir toutes les méthode create,update dans chacun dans une route 
//on peut les faire tous dans une ::ressource
Route::resource('/cars',CarsController::class);
