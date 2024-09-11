<?php

class Validator {


    // Check If User Input Corresponds With Minimum & Maximum Input Requirements
    public static function string ($value, $minLength = 1, $maxLength = INF) {

        // Trim Value
        $value = trim($value);

        // Check User Input
        return strlen(trim($value)) >= $minLength && strlen($value) <= $maxLength;

    }

    // Check If User Input Is A Valid Email Address
    public static function email ($value) {

        return filter_var($value, FILTER_VALIDATE_EMAIL);

    }

}