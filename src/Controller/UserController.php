<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController {

    public function utilisateur() : Response
    {
        return new Response('Bienvenue cher utilisateur');

    }
}