<?php

namespace App\Http\Controllers;

use App\Data\TransportadoraData;
use App\Models\Transportadora;
use App\Usecases\BuscaTransportadoras;
use ProtoneMedia\Splade\SpladeTable;
use Illuminate\Http\Request;

class TransportadoraController extends Controller
{

    private BuscaTransportadoras $buscaTransportadoras;
    public function __construct(BuscaTransportadoras $buscaTransportadoras)
    {
        $this->buscaTransportadoras = $buscaTransportadoras;
    }
    public function index()
    {
        $nome = request()->input('filter')['nome'] ?? null;
        if ($nome) {
            return $this->buscaTransportadorPorNome($nome);
        }

        $data = $this->buscaTransportadoras->execute();

        return view('transportadora.lista', [
            'transportadoras' => SpladeTable::for($data['transportadoras'])
                ->column('id', label: 'Código', sortable: true)
                ->column('nome', label: 'Nome', sortable: true)
                ->column('endereco', label: 'Endereço', sortable: true)
                ->column('email', label: 'Email', sortable: true)
                ->column('telefone', label: 'Telefone', sortable: true)
                ->selectFilter(
                    key: 'nome',
                    label: 'Nome',
                    options: Transportadora::query()->select('nome')->distinct()->pluck('nome', 'nome')->toArray()
                )->paginate(5)
        ]);

    }

    public function buscaTransportadorPorNome(string $nome)
    {
        $transportadoras = Transportadora::where('nome', $nome)->get();
        return view('transportadora.lista', [
            'transportadoras' => SpladeTable::for($transportadoras)
                ->column('id', label: 'Código', sortable: true)
                ->column('nome', label: 'Nome', sortable: true)
                ->column('endereco', label: 'Endereço', sortable: true)
                ->column('email', label: 'Email', sortable: true)
                ->column('telefone', label: 'Telefone', sortable: true)
                ->selectFilter(
                    key: 'nome',
                    label: 'Nome',
                    options: Transportadora::query()->select('nome')->distinct()->pluck('nome', 'nome')->toArray()
                )
                // ->paginate(5)
        ]);
    }

    public function create() {
        return view('transportadora.form');
    }

    public function store(Request $request) {
        $data = TransportadoraData::from($request->all());
        // Transportadora::create(request()->all());
        session()->flash('success', 'Transportadora cadastrada com sucesso!');
        return redirect()->route('transportadora');
    }

}
