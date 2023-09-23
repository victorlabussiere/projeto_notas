<?php

namespace Core\Middleware;

class Auth implements Permission
{
    public static function handle()
    {
        if (!isset($_SESSION['user'])) {
            // não existindo autenticação válida, retorna unauthorized
            abort(403);

            exit();
        }
    }
}
