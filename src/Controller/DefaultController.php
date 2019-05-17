<?php


namespace App\Controller;

use phpDocumentor\Reflection\Types\Array_;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/hello/{name}")
     */
    public function apiExample($name)
    {
//        return new Response("Hello $name!" );
//        return $this->render('default/index.html.twig', [
//            'name' => $name,
//        ]);
        return $this->json([
            'name' => $name,
            'FE' => Array('Duc', 'Minh', 'An'),
            'PM' => 'Nguyen',
            'QC' => 'Nhan',
            'BE' => 'Son',
        ]);

    }

    /**
     * @Route("/hello")
     */
    public function hello()
    {
        return new Response('Hello');
    }

    /**
     * @Route("/simplicity")
     */
    public function simple()
    {
        return new Response('Simple! Easy! Great!');
    }
}