<?php


namespace App\Application\Controller;


use App\Application\Service\PruebaService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Attribute\Route;

class PruebasController extends AbstractController {

    /**
     * @Route('/pruebas', methods={'GET'})
     */
    public function showPruebasList(): JsonResponse {

        /** @var PruebaService $pruebaService */
        $pruebaService = $this->container->get('structure.app.prueba.service');
        $listPruebas = $pruebaService->listPruebas();

        return $this->json($listPruebas);
    }
}