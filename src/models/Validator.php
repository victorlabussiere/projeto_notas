<?php

class Validator
{
    static function string($value, $min, $max)
    {
        $value = trim($value);
        return strlen($value) >= $min && strlen($value) <= $max;
    }

    static function email($value)
    {
        filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
