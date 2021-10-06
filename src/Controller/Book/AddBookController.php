<?php

namespace Library\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AddBookController extends AbstractController
 {
    public function index(Request $request): Response 
    {
        $name = $request->get('name');
        $author = $request->get('author');
        $image = $request->get('image');
        $theme = $request->get('theme');
        
        return $this->render('base.html.twig', []);
    }
}