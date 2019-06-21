<?php

namespace Biblioteca;

class Area extends Domainobject
{
    private $nome;

    public function __construct(long $id, string $nome)
    {
        $this->$nome = $nome;
    }

    public function getnome()
    {
        return $this->$nome;
    }
}
