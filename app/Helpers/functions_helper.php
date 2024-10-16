<?php

function display_error($field, $errors)
{
    //empty = vazio
    // se não existir erros não faça nada
    if (empty($errors)) {
        return;
    }

    if (key_exists($field, $errors)) {
        return '<div class="text-danger fw-bold"><i class="fa-regular fa-circle-xmark me-1"></i> ' . $errors[$field] . '</small></div>';
    }
}

function calculate_promotion($value, $discount)
{
    if ($discount == 0) {
        return $value;
    }

    // round to 2 decimal places
    return round($value - ($value * $discount) / 100, 2);
}

function normalize_price($price)
{
    // valor de retorno com vírgula e 2 casas decimais
    return number_format($price, 2, ',', '.');
}
