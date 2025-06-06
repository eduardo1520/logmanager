<?php

namespace App\Repositories;

interface PedidoRepositoryInterface
{
    public function buscaPedidosRecentes(): array;
}
