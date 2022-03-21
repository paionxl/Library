<?php

namespace Library\Controller;

use Library\Application\DeleteBook\DeleteBookServiceRequest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class DeleteBookController extends AbstractController
{
    public function delete(Request $request): Response
    {
        $data = [
            'author_filter' => $request->get('author_filter', ''),
            'title_filter' => $request->get('title_filter', ''),
        ];
        try {
            $this->get("library.application.delete_book")->execute($request->get('identity'));
            $data['message'] = 'Book deleted correctly';
        } catch (\InvalidArgumentException $e) {
            $data['message'] = $e->getMessage();
        }

        return $this->render('base.html.twig', $data);
    }
}
