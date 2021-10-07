<?php

namespace Library\Controller;

use Library\Application\AddBook\AddBookServiceRequest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AddBookController extends AbstractController
 {
    public function index(Request $request): Response
    {
        try {
            $addBookRequest = new AddBookServiceRequest(
                $request->get('title'),
                $request->get('author'),
                $request->get('image'),
                $request->get('theme'),
                $request->get('synopsis'),
            );
            $this->get()->execute($addBookRequest);
            // flash correct
        } catch (\InvalidArgumentException $e) {
            // flash incorrect
        }

        return $this->render('base.html.twig', []);
    }
}
