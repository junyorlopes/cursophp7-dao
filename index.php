<?php
//Inclusão do arquivo que faz a verificação de classes existentes.
require_once("config.php");
//Instancia da classe Sql que vem do config.php.
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios");

$sql->exibir($usuarios);
?>