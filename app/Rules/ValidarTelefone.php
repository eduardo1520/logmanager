<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\InvokableRule;

class ValidarTelefone implements InvokableRule
{
    public function __invoke(string $attribute, mixed $value, \Closure $fail): void
    {
        $value = trim($value);

        // Regex que permite:
        // (11) 95851-0783  -> DDD entre parênteses + espaço opcional + 4 ou 5 dígitos + hífen + 4 dígitos
        // 3655-789         -> 4 dígitos + hífen + 3 dígitos
        // (11) 4578-1245   -> DDD entre parênteses + espaço opcional + 4 dígitos + hífen + 4 dígitos
        if (!preg_match('/^((\(\d{2}\)\s?)?(\d{4,5}-\d{3,4}))$/', $value)) {
            $fail("O campo $attribute deve estar no formato válido: (11) 90000-0000, 3655-789 ou (11) 4578-1245.");
        }
    }
}
