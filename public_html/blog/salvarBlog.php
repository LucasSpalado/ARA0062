<?php

include_once ("../servico/Bd.php");

$titulo = $_GET["titulo"];
$corpo = $_GET["corpo"];

if (isset($_GET["id"])) {
    $id = $_GET["id"];
    $sql = "update blog set titulo='$titulo',  corpo='$corpo' where id='$id' ";
}else {
    $sql = "INSERT INTO `blog` (`id`, `titulo`, `corpo`) VALUES (NULL, '$titulo', '$corpo')";    
}


$bd = new Bd();
$contador = $bd->exec($sql); // insert, update e delete

echo "<h1> Foi incluído/atualizado $contador registro </h1>";

echo "<a href='consultaBlog.php'>Voltar </a>";

?>