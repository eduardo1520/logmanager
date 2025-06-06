<?php

namespace App\Providers;

use App\Repositories\EtiquetaEntregaRepositoryInterface;
use App\Repositories\EtiquetasEntregaRepository;
use App\Repositories\PedidoRepositoryInterface;
use App\Repositories\TransportadoraRepositoryInterface;
use App\Repositories\TransportadoraRepository;
use App\Repositories\PedidoRepository;
use App\Repositories\RastreamentoPedidoRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void {
        $this->app->bind(EtiquetaEntregaRepositoryInterface::class, EtiquetasEntregaRepository::class);
        $this->app->bind(PedidoRepositoryInterface::class, PedidoRepository::class);
        $this->app->bind(TransportadoraRepositoryInterface::class, TransportadoraRepository::class);
        $this->app->bind(RastreamentoPedidoRepositoryInterface::class, PedidoRepository::class);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void {}
}
