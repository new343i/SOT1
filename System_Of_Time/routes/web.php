<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorBD;

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
    return view('Example1');
})->name('CInicio');


Route::get('/Objetivos', function (){
    return view('Objetivos');
})->name('CObjetivos');

Route::get('/insertMaestro', function(){
    return view('addMaestro');
})->name('CMaestro');

Route::post('/insertMaestro/store', [controladorBD::class,'store'])->name('bdd_sot.store');