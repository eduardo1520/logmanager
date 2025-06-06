<?php

namespace App\Http\Controllers;

use App\Usecases\BuscaTransportadoras;

class TransportadoraController extends Controller
{

    private BuscaTransportadoras $buscaTransportadoras;
    public function __construct(BuscaTransportadoras $buscaTransportadoras)
    {
        $this->buscaTransportadoras = $buscaTransportadoras;
    }
    public function index()
    {
        $transportadoras = $this->buscaTransportadoras->execute();
        dd($transportadoras);
    }
}
