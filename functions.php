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


    // Show 403, If Unauthorized Access Occurs
    function authorize ($condition, $status = Response::FORBIDDEN) {

        if (! $condition) {
            abort($status);
        }

    }
