<?php

require_once("config.php");

/*$usuario = new Usuario();
$usuario->setDeslogin("rafael");
$usuario->setDessenha("abc123");
*/

/*carrega um usuario
$root = new Usuario();
$root->loadById(3);
echo $root;
*/

/*carrega uma lista de usuarios
$lista = Usuario::getList();
echo json_encode($lista);
*/

/*carrega uma lista de usuarios buscando pelo login
$search = Usuario::search("r");
echo json_encode($search);
*/

/*carrega usuario usando login e sehanha*/
$usuario = new Usuario();
$usuario->login("root", "12345");

echo $usuario;

?>