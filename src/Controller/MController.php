<?php

namespace Library\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MController extends AbstractController
 {
    public function index(): Response 
    {
        $default = [
            'title' => '',
            'author' => '',
            'synopsis' => '',
            'image' => '',
            'theme' => '',
        ];
        return $this->render('base.html.twig', $default);
    }
}

