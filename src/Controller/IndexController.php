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

    /**
     * @Route("/form", name="form")
     * @param HomeDataAccess $dataAccess
     */
    public function formPage(HomeDataAccess $dataAccess)
    {
        return $this->render('primerForm.html.twig');
    }

    /**
     * @Route("/matricula", name="matricula")
     * @param HomeDataAccess $dataAccess
     */
    public function matricula(HomeDataAccess $dataAccess)
    {
        return $this->render('matricula/matriculaPaso1.html.twig');
    }

    /**
     * @Route("/matricula2", name="matricula2")
     * @param HomeDataAccess $dataAccess
     */
    public function matricula2(HomeDataAccess $dataAccess)
    {
        return $this->render('matricula/matriculaPaso2.html.twig');
    }

    /**
     * @Route("/matricula3", name="matricula3")
     * @param HomeDataAccess $dataAccess
     */
    public function matricula3(HomeDataAccess $dataAccess)
    {
        return $this->render('matricula/matriculaPaso3.html.twig');
    }

    /**
     * @Route("/matricula4", name="matricula4")
     * @param HomeDataAccess $dataAccess
     */
    public function matricula4(HomeDataAccess $dataAccess)
    {
        return $this->render('matricula/matriculaPaso4.html.twig');
    }

    /**
     * @Route("/matricula5", name="matricula5")
     * @param HomeDataAccess $dataAccess
     */
    public function matricula5(HomeDataAccess $dataAccess)
    {
        return $this->render('matricula/matriculaPaso5.html.twig');
    }

    /**
     * @Route("/matricula6", name="matricula6")
     * @param HomeDataAccess $dataAccess
     */
    public function matricula6(HomeDataAccess $dataAccess)
    {
        return $this->render('matricula/matriculaPaso6.html.twig');
    }
    /**
     * @Route("/matricula7", name="matricula7")
     * @param HomeDataAccess $dataAccess
     */
    public function matricula7(HomeDataAccess $dataAccess)
    {
        return $this->render('matricula/matriculaPaso7.html.twig');
    }

    /**
     * @Route("/matricula8", name="matricula8")
     * @param HomeDataAccess $dataAccess
     */
    public function matricula8(HomeDataAccess $dataAccess)
    {
        return $this->render('matricula/matriculaPaso8.html.twig');
    }



}