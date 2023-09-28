<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 02 (corrigido)</title>
</head>
<body>
    <h1>Exercício 02 (corrigido)</h1>
    <hr>
<?php
require_once "src/Tecnico.php";
$livroTecnico = new Tecnico;
$livroTecnico->setTitulo("Desenvolvimento de Sistemas");
$livroTecnico->setAutor("Fulano de Tal");
$livroTecnico->setPaginas(250);
$livroTecnico->setFormato(["digital"]);
?>
<h2>Dados (Técnico)</h2>
<p>Nome: <?=$livroTecnico->getTitulo()?> </p>
<p>Autor: <?=$livroTecnico->getAutor()?> </p>
<p>Formato: <?=$livroTecnico->getFormato()?> </p>


</body>
</html>