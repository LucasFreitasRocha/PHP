<?php

namespace Biblioteca;

class Area extends Domainobject
{
    private $nome;

    public function __construct(int $id, string $nome)
    {
        parent::__construct($id);

        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }
}
