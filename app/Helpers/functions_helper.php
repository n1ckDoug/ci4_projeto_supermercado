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
