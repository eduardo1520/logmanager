<?php

namespace App\Http\Controllers;

use App\Usecases\BuscaEtiquetas;

class DashboardController extends Controller
{

    private BuscaEtiquetas $buscaEtiquetas;
    public function __construct(BuscaEtiquetas $buscaEtiquetas)
    {
        $this->buscaEtiquetas = $buscaEtiquetas;
    }
    public function index()
    {
        $etiquetas = $this->buscaEtiquetas->execute();
        dd($etiquetas);
    }
}
