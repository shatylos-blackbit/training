<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class BookController extends AbstractController
{
//    # [ Route('/book', name: 'app_book_index', condition: "request.headers.get('x-custom-header' == 'foo'")]
    #[Route('/book', name: 'app_book_index')]
    public function index(): Response
    {
        return $this->render('book/index.html.twig', [
            'controller_name' => 'BookController::index',
        ]);
    }

    #[Route('/book/{id<\d+>}/{action?show}', name: 'app_book_show', defaults: ['id' => 0])]
    public function show(int $id, $action): Response
    {
        return $this->render('book/index.html.twig', [
            'controller_name' => 'BookController::show - ' . $action . " : " . $id,
        ]);
    }

}
