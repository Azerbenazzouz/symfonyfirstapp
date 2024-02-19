<?php
    namespace App\Controller;
    use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
    use Symfony\Component\HttpFoundation\Response;
    use Symfony\Component\Routing\Attribute\Route;
    class homeController extends AbstractController{
        #[Route('/show')]
        public function show(){
            return $this->render("/home/show.html.twig");
            // dd("Home Controller");
        }
        #[Route('/afficher',name:'R1')]
        public function afficher(){
            dd("Home Controller Afficher");
        }
        #[Route("test")]
        public function test(): Response {
            return new Response("<h1>Hello Test Page</h1>");
        }
    }

