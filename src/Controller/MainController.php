<?php

namespace Library\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
 {
    public function index(): Response
    {
        return $this->render(
            'base.html.twig',
            [
                'author_filter' => '',
                'title_filter' => '',
                'books' => [],
            ]
        );
    }
}
