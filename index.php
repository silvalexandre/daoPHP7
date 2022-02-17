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

/*INCLUI UM NOVO USUARIO NO BANCO DE DADOS

$novoUsuario = new Usuario("maioral", "mekan");

$novoUsuario->insert();

echo $novoUsuario;
*/


/*Alterando dados de um usuario

$userUp = new Usuario();

$userUp->loadById(3);

$userUp->update("santo", "321");

echo $userUp;

*/


//Deletando dados do banco


$userUp = new Usuario();

$userUp->loadById(3);

$userUp->delete("santo", "321");

echo $userUp;

?>