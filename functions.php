<?php

// Var_dump & die function
function dd ($value) {

    echo "<pre>";

        var_dump($value);

    echo "</pre>";

    die();
}

// Clean URI check function
function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

