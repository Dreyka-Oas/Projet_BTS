<?php

// src/Controller/DefaultController.php
namespace App\Controller;

use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DefaultController extends AbstractController
{
    /**
     * @Route("/projet_BTS", name="projet_bts")
     */
    public function index()
    {
        return $this->render('index.html.twig');
    }
}
