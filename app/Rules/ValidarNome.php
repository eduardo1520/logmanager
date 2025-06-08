<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;

class ValidarNome implements ValidationRule
{
    /**
     * Valida se o nome contém apenas letras e espaços, e tem no mínimo 3 caracteres.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @param  \Closure(string, ?string=): void  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        $valor = is_string($value) ? trim($value) : '';

        if (mb_strlen($valor) < 3) {
            $fail("O campo {$attribute} deve ter no mínimo 3 caracteres.");
            return;
        }

        if (!preg_match('/^[\pL\s]+$/u', $valor)) {
            $fail("O campo {$attribute} deve conter apenas letras e espaços.");
        }
    }
}
