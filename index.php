<?php
require_once "src/Livro.php";
$livro = new Livro;
$livro->setAutor("J.R.R. Tolkien");
$livro->setTitulo("O Hobbit");
$livro->setPaginas(300);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 01 (corrigido)</title>
</head>
<body>
    <h1>Exercício 01 (corrigido)</h1>
    <hr>
    <ul>
        <li>Autor: <?=$livro->getAutor()?></li>
        <li>Livro: <?=$livro->getTitulo()?></li>
        <li>Páginas: <?=$livro->getPaginas()?></li>
    </ul>
</body>
</html>