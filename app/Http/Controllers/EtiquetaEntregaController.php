<?php

namespace App\Http\Controllers;

use App\Data\TransportadoraData;
use App\Models\Pedido;
use App\Models\Transportadora;
use App\Models\Vendedor;
use App\Usecases\BuscaEtiquetasEntrega;
use Illuminate\Http\Request;

class EtiquetaEntregaController extends Controller
{

    private BuscaEtiquetasEntrega $buscaEtiquetasEntrega;
    public function __construct(BuscaEtiquetasEntrega $buscaEtiquetasEntrega)
    {
        $this->buscaEtiquetasEntrega = $buscaEtiquetasEntrega;
    }
    public function index()
    {

    }

    public function create() {
        $vendedores = Vendedor::query()->select('id','nome')->distinct()->pluck('nome', 'id')->toArray();
        $transportadoras = Transportadora::query()->select('id','nome')->distinct()->pluck('nome', 'id')->toArray();
        $pedidos = Pedido::query()->select('id','produto')->distinct()->pluck('produto', 'id')->toArray();
        return view('etiqueta_entrega.form', compact('vendedores', 'transportadoras', 'pedidos'));
    }

    public function store(Request $request) {
        // dd($request->all());
        // $data = TransportadoraData::from($request->all());
        // Transportadora::create(request()->all());
        session()->flash('success', 'Etiqueta de Entrega cadastrada com sucesso!');
        return redirect()->route('dashboard');
    }


}
