<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class TestController extends AbstractController
{
    #[Route('/article', name: 'app_test')]
    public function index(): Response
    {
        return $this->render('test/index.html.twig', [
            'controller_name' => 'Azer',
        ]);
    }

    #[Route('/article/{id<\d+>?1}',name:'app_article')]
    // <\d+> d+ d{,3} 1 char to 3 chars
        // valeur par defaut ? + valuer par defaut exemple : ?1
    public function article_show($id ) : Response
    {
        return $this->render('test/article_show.html.twig',['Id'=>$id]);
    }

    #[Route('/article/findAll',name:'app_article_findall')]
    public function article_findAll(Request $request)
    {
        dd($request->get('_controller'));
    }
}

