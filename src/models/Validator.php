<?php

class Validator
{
    static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    static function email($value)
    {
        filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
