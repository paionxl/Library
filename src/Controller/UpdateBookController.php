<?php

namespace Library\Controller;

use Library\Application\UpdateBook\UpdateBookServiceRequest;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class UpdateBookController extends AbstractController
{
    public function update(Request $request): Response
    {
        $data = [
            'author_filter' => $request->get('author_filter', ''),
            'title_filter' => $request->get('title_filter', ''),
        ];
        try {
            $updateBookRequest = new UpdateBookServiceRequest(
                $request->get('title', ''),
                $request->get('author', ''),
                $request->get('image', ''),
                $request->get('theme', ''),
                $request->get('synopsis', '')
            );
            $data['message'] = 'Book updated correctly';
            $this->get("library.application.update_book")->execute($updateBookRequest);
            return $this->render(
                'base.html.twig',
                $data
            );
        } catch (\InvalidArgumentException $e) {
            $data = array_merge(
                $data,
                [
                    'title' => $request->get('title', ''),
                    'author' => $request->get('author', ''),
                    'image' => $request->get('image', ''),
                    'theme' => $request->get('theme', ''),
                    'synopsis' => $request->get('synopsis', ''),
                    'message' => $e->getMessage()
                ]
            );
            return $this->render('form.html.twig', $data);
        }
    }
}
