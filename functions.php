<?php

use Core\Response;

function dd($value)
{
    echo '<pre>';
    var_dump($value);
    echo '</pre>';

    die();
}

function abort($code = 404)
{
    http_response_code($code);
    view("{$code}", [
        'heading' => 'Unauthorized',
        'user' => []
    ]);

    die();
}

function authorizate($condition, $status = Response::FORBIDDEN)
{
    if (!$condition) {
        abort($status);
    }
}
