<?php

namespace Biblioteca\Publicacao;

use Biblioteca\Area;

class Revista extends Publicacao
{
    private $periodicidadeEmDias;

    public function __construct(int $id, string $titulo, int $numExemplares, Area $area, int $periodicidadeEmDias)
    {
        parent::__construct($id, $titulo, $numExemplares, $area);

        $this->periodicidadeEmDias = $periodicidadeEmDias;
    }
}
