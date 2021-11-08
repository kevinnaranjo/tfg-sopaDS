<?php


namespace App\Controller;


use App\Service\HomeDataAccess;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Core\Exception\AccessDeniedException;

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
     * @Route("/bbdd/{anno}", name="bbdd")
     * @param HomeDataAccess $dataAccess
     * @param int $anno
     */
    public function bbddPage(HomeDataAccess $dataAccess, int $anno)
    {
        return$this->render('examanesDinamicoDS.html.twig', [
            "examenes" => $dataAccess->getExamenesPorAnno($anno)
        ]);
    }

    /**
     * @Route("/filtrado", name="filtrado")
     * @param HomeDataAccess $dataAccess
     * @return JsonResponse
     */
    public function filtrado(Request $request, HomeDataAccess $dataAccess): JsonResponse
    {
        if (!$request->request->has("anno")) {
            throw new AccessDeniedException();
        }

        return new JsonResponse([
            'content' => $this->renderView('examenesTabs.html.twig', [
                "examenes" => $dataAccess->getExamenesPorAnno($request->request->get("anno")),
            ]),
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

    /**
     * @Route("/matricula9", name="matricula9")
     * @param HomeDataAccess $dataAccess
     */
    public function matricula9(HomeDataAccess $dataAccess)
    {
        return $this->render('matricula/matriculaPaso9.html.twig');
    }

    /**
     * @Route("/senderismo", name="senderismo")
     * @param HomeDataAccess $dataAccess
     */
    public function senderismo(HomeDataAccess $dataAccess)
    {
        return $this->render('landingPage/landingpageSenderismo.html.twig');
    }

    /**
     * @Route("/kayak", name="kayak")
     * @param HomeDataAccess $dataAccess
     */
    public function kayak(HomeDataAccess $dataAccess)
    {
        return $this->render('landingPage/landingpageKayak.html.twig');
    }

    /**
     * @Route("/playas", name="playas")
     * @param HomeDataAccess $dataAccess
     */
    public function playas(HomeDataAccess $dataAccess)
    {
        return $this->render('landingPage/landingpageBuceo.html.twig');
    }

    /**
     * @Route("/forestal", name="forestal")
     * @param HomeDataAccess $dataAccess
     */
    public function forestal(HomeDataAccess $dataAccess)
    {
        return $this->render('landingPage/landingpageTraining.html.twig');
    }

}