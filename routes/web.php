<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\DashboardLivewire;
use App\Http\Livewire\Filieres;
use App\Http\Livewire\Stagiaire;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', DashboardLivewire::class);
Route::get('filieres',Filieres::class);
Route::delete('filieres/{{filiere}}',Filieres::class);
Route::get('stagiaire',Stagiaire::class);

