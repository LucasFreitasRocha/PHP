<?php

namespace Biblioteca;

abstract class Publicacao extends Domainobject
{
    protected $titulo = '';
    protected $numexemplares;
    protected $numExemplaresEmprestados;
    protected $area;

    public function __construct(string $titulo, int $numexemplares, int $numExemplaresEmprestados, Area $area)
    {
        $this->titulo = $titulo;
        $this->numexemplares = $numexemplares;
        $this->numExemplaresEmprestados = $numExemplaresEmprestados;
        $this->area = $area;
    }

    public function getnumexemplaresdisponiveis()
    {
        $aux = $this->numexemplares - $this->$numExemplaresEmprestados;
        if ($aux < 0) {
            throw new \Exception('Não tem exemplares disponiveis');
        }

        return $aux;
    }

    public function getnumexemplares()
    {
        return $this->numexemplares;
    }

    public function atulizarnumexplares(int $novonumexemplares)
    {
        $this->$numexemplares = $novonumexemplares;
    }
}
