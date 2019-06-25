<?php
namespace Biblioteca\Pessoa;

class Autor extends Pessoa
{
    protected $biografia;

    public function __construct(int $id, string $nome, string $biografia)
    {
        parent::__construct($id, $nome);

        $this->biografia = $biografia;
    }
}