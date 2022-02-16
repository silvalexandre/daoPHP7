<?php

require_once("config.php");

/*
$sql = new Sql();

$usuarios = $sql->select("SELECT * FROM tb_usuarios WHERE idusuario = 1");

echo json_encode($usuarios);
*/


$usuario = new Usuario();

$usuario->loadById(1);

echo $usuario;




?>