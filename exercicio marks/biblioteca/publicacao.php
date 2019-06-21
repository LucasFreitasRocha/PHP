<?php

namespace Biblioteca;

abstract class Publicacao extends Domainobject
{
    protected $titulo = '';
    protected $numexemplares;
    protected $numExemplaresEmprestados;

    public function __construct(string $titulo, int $numexemplares, int $numExemplaresEmprestados)
    {
        $this->$titulo = $titulo;
    }

    public function getnumexemplaresdisponiveis()
    {
        $aux = $numexemplares - $numExemplaresEmprestados;
        if ($aux < 0) {
            throw new \Exception("Não tem exemplares disponiveis");
        }

        return $aux;
    }
    
    public function getnumexemplares()
    {
        return $numexemplares;
    }

    public function atulizarnumexplares(int $novonumexemplares)
    {
        $this->$numexemplares = $novonumexemplares;
    }
}
