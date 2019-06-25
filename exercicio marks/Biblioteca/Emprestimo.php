<?php

namespace Biblioteca;

use Biblioteca\Pessoa\Aluno;
use Biblioteca\Publicacao\Publicacao;

class Emprestimo extends DomainObject
{
    protected $publicacao;
    protected $aluno;
    protected $inicio;
    protected $previsaoEntrega;
    protected $entrega;

    public function __construct(int $id, Publicacao $publicacao, Aluno $aluno, $inicio, $previsaoEntrega)
    {
        parent::__construct($id);

        $this->publicacao = $publicacao;
        $this->aluno = $aluno;
        $this->inicio = $inicio;
        $this->previsaoEntrega = $previsaoEntrega;
    }

    public function obterDiasEmAtraso(): int
    {
        return 1;
    }
}