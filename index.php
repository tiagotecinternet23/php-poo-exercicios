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
// Livro Técnico
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

<hr>

<?php
// Livro Didático
require_once "src/Didatico.php";
$livroDidatico = new Didatico;
$livroDidatico->setTitulo("Literatura Moderna");
$livroDidatico->setFormato(["digital", "fisico"]);
$livroDidatico->setNivel(["médio", "superior"]);
?>
<h2>Dados (Didático)</h2>
<p>Nome: <?=$livroDidatico->getTitulo()?> </p>
<p>Formato: <?=$livroDidatico->getFormato()?> </p>
<p>Nível: 
    <?php foreach($livroDidatico->getNivel() as $nivel){
        echo $nivel." ";
    } ?> 
</p>

</body>
</html>