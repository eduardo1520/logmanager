<?php

namespace App\Http\Controllers;

use App\Models\EtiquetaEntrega;
use App\Usecases\BuscaRastreamentoPedidos;
use ProtoneMedia\Splade\SpladeTable;

class RastreamentoPedidoController extends Controller
{

    private BuscaRastreamentoPedidos $buscaRastreamentoPedidos;
    public function __construct(BuscaRastreamentoPedidos $buscaRastreamentoPedidos)
    {
        $this->buscaRastreamentoPedidos = $buscaRastreamentoPedidos;
    }
    public function index()
    {
        $data = $this->buscaRastreamentoPedidos->execute();
        dd($data);
        return view('etiqueta_entrega.lista', [
            'etiqueta_entrega' => SpladeTable::for($data['etiquetas_entrega'])
                ->column('vendedores.nome', label: 'Vendedor', sortable: true)
                ->column('transportadoras.nome', label: 'Transportador', sortable: true)
                ->column('pedido.produto', label: 'Produto', sortable: true)
                ->column('data_envio', label: 'Data envio', sortable: true)
                ->selectFilter(
                    key: 'vendedores.nome',
                    label: 'Vendedor',
                    options: [] //EtiquetaEntrega::query()->select('nome')->distinct()->pluck('nome', 'nome')->toArray()
                )->paginate(5)
        ]);

    }
}
