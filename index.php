<?php

require_once("config.php");

/*Chama um usuário pelo ID.

$usuario = new Usuario();

$usuario->loadById(1);

echo $usuario;

*/


/*retorna uma lista de todos os usuarios cadastrados

$lista = Usuario::getList();

echo json_encode($lista);
*/

//Busaca usuarios pelo login

//$buscaLogin = Usuario::search("pa");

//echo json_encode($buscaLogin);

/*carrega um usuário autenticado

$usuario = new Usuario();

$usuario->login('alex', 'soma');

echo $usuario;

*/

//INCLUI UM NOVO USUARIO NO BANCO DE DADOS

$novoUsuario = new Usuario("maioral", "mekan");

$novoUsuario->insert();

echo $novoUsuario;


?>