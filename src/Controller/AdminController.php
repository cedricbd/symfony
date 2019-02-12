<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController {

    public function administrateur() : Response
    {
        return new Response('mode administrateur');
        
    }
}