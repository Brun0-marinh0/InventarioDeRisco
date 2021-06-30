<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\ConfigController;
use App\Http\Controllers\GrupoRiscoController;
use App\Http\Controllers\OrigemPerigoController;

use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;

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

//Rotas Pablo
Route::get('/home', [HomeController::class, 'home'])->name('site.home');
Route::get('/inventario', [InventarioController::class, 'inventario'])->name('site.inventario');
Route::post('/maquinas', [HomeController::class, 'store'])->name('site.store');
Route::delete('/maquinas/delete', [HomeController::class, 'destroy']);
Route::get('/erro', [ExistenteController::class, 'existe'])->name('');
// 


///rotas Bruno
Route::get('/config', [ConfigController::class, 'config'])->name('site.config');
Route::get('/config/risco', [GrupoRiscoController::class, 'risco'])->name('site.risco');
Route::get('/config/menu-origem', [OrigemPerigoController::class, 'origemPerigo'])->name('site.menuOrigem');
Route::get('/sair', [ConfigController::class, 'sair'])->name('site.sair');
Route::delete('/config/risco/{id}', [GrupoRiscoController::class, 'destroy']);
//
