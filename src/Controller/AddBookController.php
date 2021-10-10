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
        $error = '';
        try {
            $addBookRequest = new AddBookServiceRequest(
                trim($request->get('title', '')),
                trim($request->get('author', '')),
                trim($request->get('image', '')),
                trim($request->get('theme', '')),
                trim($request->get('synopsis', '')),
            );
            $this->get("library.application.add_book")->execute($addBookRequest);
        } catch (\InvalidArgumentException $e) {
            $error = $e->getMessage();
            $data = [
                'title' => $request->get('title', ''),
                'author' => $request->get('author', ''),
                'image' => $request->get('image', ''),
                'theme' => $request->get('theme', ''),
                'synopsis' => $request->get('synopsis', ''),
                'error' => $error
            ];
            return $this->render('form.html.twig', $data);
        }

        return $this->render('base.html.twig', []);
    }
}
