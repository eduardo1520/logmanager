<?php

namespace App\Data;

use App\Rules\ValidarEmail;
use App\Rules\ValidarNome;
use App\Rules\ValidarTelefone;
use Spatie\LaravelData\Attributes\Validation\Rule;
use Spatie\LaravelData\Data;

class TransportadoraData extends Data
{
    public function __construct(
        #[Rule(new ValidarNome())]
        public string $nome,
        public string $endereco,
        #[Rule(new ValidarEmail())]
        public string $email,
        #[Rule(new ValidarTelefone())]
        public string $telefone
        ) {}
}
