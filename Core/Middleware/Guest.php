<?php

namespace Core\Middleware;

class Guest implements Permission
{
    public static function handle()
    {
        if ($_SESSION['user'] ?? false) {       // if doesnt exist user session
            header('location: /');      // redirect to homepage

            exit();                             // exit service
        }
    }
}
