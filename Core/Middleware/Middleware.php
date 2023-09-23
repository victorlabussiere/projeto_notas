<?php

namespace Core\Middleware;

use Core\Middleware\Permission;

class Middleware
{
    /**
     * @const MAP -> realiza a assimilação de chave enviada no middleware a classe instanciada 
     * @example ['$key' => '$value']
     * @param   string $key
     * @param   Permission $value
     */
    const MAP = [
        'auth' => Auth::class,
        'guest' => Guest::class
    ];

    /**
     * @param   string $permission
     * @var     Permission $middleware
     * @return  void
     * 
     * Classe responsável por resovler o middleware de acordo com a permissão  
     */
    public static function resolve(string | null $permission)
    {
        if (!$permission) {
            return;     // interrompe a chamada
        }

        $middleware = static::MAP[$permission] ?? false;    // associação de classes de acordo com a permissão

        if (!$middleware) {
            throw new \Exception("No matching middleware found for key '{$permission}'.");
        }

        $middleware::handle();    // retorna método handle da classe 
    }
}
