<?php

require_once 'vendor/autoload.php';

$p = new Biblioteca\Revista(2147483647, 'Brasil', 50);
echo $p->getnumexemplares().PHP_EOL;

echo 'ok';

// Estava faltando o <?php na classe revisão
// Mudei o parametro id de long para int
