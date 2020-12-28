<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\DashboardLivewire;
use App\Http\Livewire\Filiere;

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
Route::get('filieres',Filiere::class);
