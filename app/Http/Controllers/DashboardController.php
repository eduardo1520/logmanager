<?php

namespace App\Http\Controllers;

use App\Usecases\BuscaEtiquetas;
use ProtoneMedia\Splade\SpladeTable;

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
        // return view('dashboard', compact('etiquetas'));
        return view('dashboard', [
            'etiquetas' => $etiquetas['etiquetas'],
            'pedidos' => SpladeTable::for($etiquetas['pedidos'])
                ->column('vendedor', label: 'Vendedor', sortable: true)
                ->column('produto', label: 'Produto', sortable: true)
                ->column('valor_total', label: 'Valor Total', sortable: true)
                ->column('status', label: 'Status', sortable: true)
                ->selectFilter(
                    key: 'status',
                    label: 'Status',
                    options: [
                        'Pendente' => 'Pendente',
                        'Entregue' => 'Entregue',
                        'Em Trânsito' => 'Em Trânsito',
                    ]
                )
                // ->paginate(5)
        ]);
    }
}
