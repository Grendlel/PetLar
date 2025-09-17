<?php

use App\Http\Controllers\calculadoraController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/petlar/mais', function () {return view('verPets'); })->name('verPets');
Route::get('/petlar/canil', function(){return view('canil');})->name('canil');