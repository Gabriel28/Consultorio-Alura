<?php


namespace App\Controller;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    /**
     * @Route("/ola")
     */
    public function OlaMundoAction() {

        echo 'Olá Mundo!';
        exit();
    }
}