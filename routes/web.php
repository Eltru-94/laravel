<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;
use App\Http\Controllers\CategoriaController;
use App\Http\Controllers\inicioController;
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
/*
Route::get('/', function () {
    return view('vistaPrueba',['name'=>'Paola']);
});
*/
/*
if(view()->exists('vistaPrueba2'))
{
    Route::get('/', function () {
        return view('vistaPrueba',['name'=>'Paola']);
    });
}else{
    Route::get('/', function () {
        return "Hola no existe";
    });
}

*/
/*
Route::get('/dos',function(){
    return '<h1>My friends is praticing english</h1>';
});

Route::get('/',[inicioController::class,'index']);

*/
Route::resource('/',inicioController::class);
Route::resource('/categoria',CategoriaController::class);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


