<?php

namespace Core;

class Validator
{
    static function string($value, $min = 1, $max = INF)
    {
        $value = trim($value);

        if (strlen($value) <= $min) return false;
        if (strlen($value) >= $max) return false;

        return true;
    }

    static function email($value)
    {
        filter_var($value, FILTER_VALIDATE_EMAIL);
    }
}
