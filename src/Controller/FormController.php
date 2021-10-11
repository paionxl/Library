<?php

namespace Library\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class FormController extends AbstractController
{
    public function index(Request $request): Response
    {
        $identity = $request->get('id', '');
        if ($identity) {
            $data = $this->get()->execute($identity);
        } else {
            $data = [
                'id' => '',
                'title' => '',
                'author' => '',
                'synopsis' => '',
                'image' => '',
                'theme' => '',
            ];
        }

        return $this->render('form.html.twig', $data);
    }
}
