<?php

use Biblioteca\Area;
use Biblioteca\Pessoa\Autor;
use Biblioteca\Publicacao\Livro;
use Biblioteca\Publicacao\Revista;

require_once 'vendor/autoload.php';

// Emprestimo de Publicação - Revista
$acao = new Area(1, 'Ação');

$publicacaoRevista = new Revista(
    2147483647,
    'Brasil',
    50,
    $acao,
    10
);

// Emprestimo de Publicação - Livro
$publicacaoLivro = new Livro(
    12345,
    'Pais de Todos',
    25,
    $acao,
    '12343bt'
);

$autor1 = new Autor(1, 'Paulo Coelho', 'Top1');
$autor2 = new Autor(2, 'Machado de Assis', 'Top2');
$autor3 = new Autor(3, 'Choque de Cultura', 'Top3');

$publicacaoLivro->adicionarAutor($autor1);
$publicacaoLivro->adicionarAutor($autor2);
$publicacaoLivro->adicionarAutor($autor3);
$publicacaoLivro->removerAutor($autor2);

echo $publicacaoRevista->obterNumExemplares() . PHP_EOL;

echo 'ok';

// Estava faltando o <?php na classe revisão
// Mudei o parametro id de long para int
