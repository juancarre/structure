<?php


namespace App\Application\Service;


use App\Domain\Repository\PruebaRepositoryInterface;

class PruebaService {

    private PruebaRepositoryInterface $pruebaRepository;

    public function __construct(PruebaRepositoryInterface $pruebaRepository) {
        $this->pruebaRepository = $pruebaRepository;
    }

    public function listPruebas() {
        return $this->pruebaRepository->listPruebas();
    }
}