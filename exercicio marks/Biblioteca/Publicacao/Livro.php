<?php

namespace Biblioteca\Publicacao;

use ArrayObject;
use Biblioteca\Area;
use Biblioteca\Pessoa\Autor;

class Livro extends Publicacao
{
    protected $ISBN;
    private $autores;

    public function __construct(int $id, string $titulo, int $numExemplares, Area $area, string $ISBN)
    {
        parent::__construct($id, $titulo, $numExemplares, $area);

        $this->ISBN = $ISBN;
        $this->autores = new ArrayObject();
    }

    public function adicionarAutor(Autor $autor)
    {
        $this->autores->append($autor);
    }

    public function removerAutor(Autor $autor)
    {
        $iterator = $this->autores->getIterator();

        while ($iterator->valid()) {
            if ($iterator->current() === $autor)
                $this->autores->offsetUnset($iterator->key());

            $iterator->next();
        }
    }
}