<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\TransportadoraController;
use App\Http\Controllers\RastreamentoPedidoController;
use App\Http\Controllers\EtiquetaEntregaController;
use App\Models\EtiquetaEntrega;
use App\Models\Transportadora;

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

Route::middleware(['splade'])->group(function () {
    Route::get('/', fn () => view('home'))->name('home');
    Route::get('/docs', fn () => view('docs'))->name('docs');
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    Route::get('/transportadoras', [TransportadoraController::class, 'index'])->name('transportadora');
    Route::get('/transportadoras/novo', [TransportadoraController::class, 'create'])->name('transportadoras-nova');
    Route::post('/transportadora', [TransportadoraController::class, 'store'])->name('transportadora.store');

    Route::get('/rastreamento-pedido', [RastreamentoPedidoController::class, 'index'])->name('rastreamento-pedido');

    Route::get('/etiqueta-entrega', [EtiquetaEntregaController::class, 'index'])->name('etiqueta-entrega');
    Route::get('/etiqueta-entrega/novo', [EtiquetaEntregaController::class, 'create'])->name('etiqueta-entrega-nova');
    Route::post('/etiqueta-entrega', [EtiquetaEntregaController::class, 'store'])->name('etiqueta-entrega.store');

    // Registers routes to support the interactive components...
    Route::spladeWithVueBridge();

    // Registers routes to support password confirmation in Form and Link components...
    Route::spladePasswordConfirmation();

    // Registers routes to support Table Bulk Actions and Exports...
    Route::spladeTable();

    // Registers routes to support async File Uploads with Filepond...
    Route::spladeUploads();
});






