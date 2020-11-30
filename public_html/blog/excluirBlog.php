<?php
include_once ("../servico/Bd.php");

$bd = new Bd();

$id = $_GET["id"];

$sql = "delete from blog where id = '$id'";

$contador = $bd->exec($sql);

echo "<h1> Foi removido $contador registro</h1>";
echo '<a href="consultaBlog.php">Voltar</a>';

?>