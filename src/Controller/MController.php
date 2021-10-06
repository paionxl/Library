<?php

namespace Library\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MController extends AbstractController
 {
    public function index(): Response 
    {
        return $this->render('base.html.twig', []);
    }
}

