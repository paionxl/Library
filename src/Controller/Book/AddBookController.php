<?php

namespace Library\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AddBookController extends AbstractController
 {
    public function index(Request $request): Response
    {
        $title = $request->get('title');
        $author = $request->get('author');
        $image = $request->get('image');
        $theme = $request->get('theme');
        $theme = $request->get('synopsis');

        $this->get();

        return $this->render('base.html.twig', []);
    }
}
