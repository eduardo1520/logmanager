<?php

namespace App\Http\Controllers;

use App\Usecases\BuscaRastreamentoPedidos;

class RastreamentoPedidoController extends Controller
{

    private BuscaRastreamentoPedidos $buscaRastreamentoPedidos;
    public function __construct(BuscaRastreamentoPedidos $buscaRastreamentoPedidos)
    {
        $this->buscaRastreamentoPedidos = $buscaRastreamentoPedidos;
    }
    public function index()
    {
        $rastreamentoPedidos = $this->buscaRastreamentoPedidos->execute();
        dd($rastreamentoPedidos);
    }
}
