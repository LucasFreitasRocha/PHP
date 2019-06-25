<?php

namespace Biblioteca\Pessoa;

class Aluno extends Pessoa
{
    protected $matricula;

    public function __construct(int $id, string $nome, string $matricula)
    {
        parent::__construct($id, $nome);

        $this->matricula = $matricula;
    }
}