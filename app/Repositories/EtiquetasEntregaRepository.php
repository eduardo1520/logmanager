<?php

namespace App\Repositories;

use App\Models\EtiquetaEntrega;
use Illuminate\Support\Carbon;
use App\Enums\StatusEtiquetaEntrega;


class EtiquetasEntregaRepository implements EtiquetaEntregaRepositoryInterface
{
    public function buscaEtiquetasEntrega(): array {
        $hoje = Carbon::today();

        return [
            StatusEtiquetaEntrega::PENDENTE->value => EtiquetaEntrega::whereNull('data_envio')->count(),
            StatusEtiquetaEntrega::ENTREGUE->value => EtiquetaEntrega::whereNotNull('data_envio')->whereDate('data_envio', '<=', $hoje)->count(),
            StatusEtiquetaEntrega::TRANSITO->value => EtiquetaEntrega::whereNotNull('data_envio')->whereDate('data_envio', '>', $hoje)->count(),
        ];
    }

}
