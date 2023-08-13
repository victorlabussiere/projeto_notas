<?php

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}

function authorizate($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}
