<?php

namespace Biblioteca\Publicacao;

use Biblioteca\Area;
use Biblioteca\DomainObject;

abstract class Publicacao extends DomainObject
{
    protected $titulo;
    protected $numExemplares;
    protected $numExemplaresEmprestados;
    protected $area;

    public function __construct(int $id, string $titulo, int $numExemplares, Area $area)
    {
        parent::__construct($id);

        $this->titulo = $titulo;
        $this->numExemplares = $numExemplares;
        $this->area = $area;
    }

    public function obterNumExemplaresDisponiveis()
    {
        $aux = $this->numExemplares - $this->numExemplaresEmprestados;
        if ($aux < 0) {
            throw new \Exception('Não tem exemplares disponiveis');
        }

        return $aux;
    }

    public function obterNumExemplares()
    {
        return $this->numExemplares;
    }

    public function atualizarNumExemplares(int $novoNumExemplares)
    {
        $this->numExemplares = $novoNumExemplares;
    }
}
