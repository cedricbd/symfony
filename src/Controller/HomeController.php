<?php

namespace App\Controller;


use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;



class HomeController extends AbstractController     {

    public function Hello() : Response
    {
        return $this->render('home.html.twig');
    }

    /**
     * @route("/apropos",name="apropos")
     */

    public function apropos() : Response
    {
        return new Response('A propos du site');
    }
}