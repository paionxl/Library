<?php

namespace Library\Controller;

use Library\Application\AddBook\AddBookServiceRequest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class AddBookController extends AbstractController
 {
    public function add(Request $request): Response
    {
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
            $data = [
                'title' => $request->get('title', ''),
                'author' => $request->get('author', ''),
                'image' => $request->get('image', ''),
                'theme' => $request->get('theme', ''),
                'synopsis' => $request->get('synopsis', ''),
                'message' => $e->getMessage()
            ];
            return $this->render('form.html.twig', $data);
        }

        return $this->render(
            'base.html.twig',
            [
                'message' => 'Book added correctly'
            ]
        );
    }
}
