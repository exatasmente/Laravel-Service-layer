<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class Cpf implements Rule
{

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $cpf = preg_replace('/[^\d]/', '', $value);
        // basic validation
        if (mb_strlen($cpf) != 11 || preg_match("/^{$cpf[0]}{11}$/", $cpf)) {
            return false;
        }

        // from receita federal - Brazil 2020
        // Step 1
        for ($s = 10, $n = 0, $i = 0; $s >= 2; $n += $cpf[$i++] * $s--) {}
        if ($cpf[9] != ((($n %= 11) < 2) ? 0 : 11 - $n)) {
            return false;
        }

        // Step 2
        for ($s = 11, $n = 0, $i = 0; $s >= 2; $n += $cpf[$i++] * $s--) {}
        if ($cpf[10] != ((($n %= 11) < 2) ? 0 : 11 - $n)) {
            return false;
        }

        // valid
        return true;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute is invalid ';
    }
}
