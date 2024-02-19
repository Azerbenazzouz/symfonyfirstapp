<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
#[Route('/blog', name: 'blog')]
class BlogController extends AbstractController
{
    #[Route('/', name: '_home')]
    public function index(): Response
    {
        //return $this->render('blog/index.html.twig', ['controller_name' => 'BlogController',]);
        $url = $this->generateUrl(
            'blog_article',
            [
                'id'=>7,
                'name'=>'azerbenazzouz'
            ]
        );
        dd($url);
    }

    #[Route('/article/{id<\d+>}/{name<[a-zA-Z0-9]+>}', name: '_article')]
    public function article_detail($id,$name): Response
    {
        $url = $this->generateUrl('blog_home');
        return $this->render('blog/article_deatail.html.twig', [
            'id' => $id,
            'name' => $name
        ]);
    }
}