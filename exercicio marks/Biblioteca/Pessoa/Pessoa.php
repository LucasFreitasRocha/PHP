<?php

namespace Biblioteca\Pessoa;

use Biblioteca\DomainObject;

class Pessoa extends DomainObject
{
    protected $nome;

    public function __construct(int $id, string $nome)
    {
        parent::__construct($id);

        $this->nome = $nome;
    }
}