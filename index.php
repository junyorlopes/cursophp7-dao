<?php
//Inclusão do arquivo que faz a verificação de classes existentes.
require_once("config.php");
//Instancia da classe Sql que vem do config.php.
//$sql = new Sql();
//realizando SELECT no banco
//$usuarios = $sql->select("SELECT * FROM tb_usuarios");
//exibindo usuarios do banco
//$sql->exibir($usuarios);
$usuario = new Usuario();
$usuario->loadById(1);
echo $usuario;
?>