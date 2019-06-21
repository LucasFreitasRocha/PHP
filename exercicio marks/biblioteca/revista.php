<?php

namespace Biblioteca;

class Revista extends Publicacao
{
    private $peridodicidadeEmdias;

    public function __construct(int $id, string $titulo, int $numexemplares)
    {
        $this->numexemplares = $numexemplares;
    }
}
