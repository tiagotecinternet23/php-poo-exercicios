<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 03 </title>
</head>
<body>
    <h1>Exercício 03 </h1>
    <hr>
<?php
// Use classe por classe, cada um em uma linha
use Biblioteca\Didatico;
use Biblioteca\Tecnico;
use Biblioteca\Programacao;
use Biblioteca\Web;

// Use com lista de classes
// use Biblioteca\{Didatico, Tecnico, Programacao};

require_once "vendor/autoload.php";

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

<hr>

<?php
$livroProgramacao = new Programacao;
$livroProgramacao->setTitulo("PHP8");
$livroProgramacao->setAutor("Beltrano");
$livroProgramacao->setFormato(["digital"]);
$livroProgramacao->setArea("Back-End");
?>
<h2>Dados (Programação)</h2>
<p>Nome: <?=$livroProgramacao->getTitulo()?> </p>
<p>Formato: <?=$livroProgramacao->getFormato()?> </p>
<p>Área: <?=$livroProgramacao->getArea()?> </p>

<hr>

<?php
$livroWeb = new Web;
var_dump($livroWeb);
?>

</body>
</html>