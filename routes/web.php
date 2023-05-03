<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\ConsultaController;

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

Route::get('/consultar', [ConsultaController::class, 'consultar']);
Route::get('/empresas', function(){
    return view('empresa');
});
Route::get('/servico', function(){
    $servico = request('tipo');
    return view('servico', ['servico' => $servico]);
});

Route::get('/', [WelcomeController::class, 'welcome']);