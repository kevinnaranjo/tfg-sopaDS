<?php


namespace App\Controller;


use App\Service\HomeDataAccess;
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


    /**
     * @Route("/examenes", name="examenes")
     */
    public function examenesPage()
    {
        return$this->render('examenesDS.html.twig');
    }

    /**
     * @Route("/teoria", name="teoria")
     */
    public function teoriaPage()
    {
        return$this->render('teoriaDS.html.twig');
    }

    /**
     * @Route("/teoriaSinTabla", name="teoriaSinTabla")
     */
    public function teoriaSinTablaPage()
    {
        return$this->render('teoriaDSSInTabla.html.twig');
    }


    /**
     * @Route("/inicio", name="inicio")
     */
    public function inicioFsoPage()
    {
        return$this->render('inicioFSODS.html.twig');
    }

    /**
     * @Route("/prueba", name="prueba")
     * @param HomeDataAccess $dataAccess
     */
    public function prueba(HomeDataAccess $dataAccess)
    {
        return $this->render('prueba.html.twig', [
            "pruebas" => $dataAccess->getPruebas()
        ]);
    }


    /**
     * @Route("/bbdd", name="bbdd")
     * @param HomeDataAccess $dataAccess
     */
    public function bbddPage(HomeDataAccess $dataAccess)
    {
        return$this->render('examanesDinamicoDS.html.twig', [
            "examenes" => $dataAccess->getExamenesPrueba()
        ]);
    }
}