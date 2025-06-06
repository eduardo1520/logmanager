<?php

namespace App\Enums;

enum StatusEtiquetaEntrega: string
{
    case PENDENTE = 'Pendente';
    case TRANSITO = 'Em Trânsito';
    case ENTREGUE = 'Entregue';

    public static function fromDataEnvio(?string $dataEnvio): self {
        if (is_null($dataEnvio)) {
            return self::PENDENTE;
        }
        return now()->lt($dataEnvio) ? self::TRANSITO : self::ENTREGUE;
    }
}


