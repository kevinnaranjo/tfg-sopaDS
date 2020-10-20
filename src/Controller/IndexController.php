<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class IndexController extends AbstractController
{

    /**
     * @Route("/", name="index")
     */
    public function homepage()
    {
        return $this->render('fsoHome.html.twig');
    }

    /**
     * @Route("/design", name="design")
     */
    public function desingPage()
    {
        return$this->render('designPage.html.twig');
    }
}