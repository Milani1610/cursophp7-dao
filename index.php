<?php 

require_once("config.php");


//Carrega um usuario
//$root = new Usuario();
//$root->loadByid(1);
//echo $root;

//Carrega uma lista de usuarios
//$lista = Usuario::getList();
//echo json_encode($lista);

//Carrega uma lista de usuarios buscando pelo login
//$search = Usuario::search("m");
//echo json_encode($search);

//Carrega um usuario usando login ou senha
$usuario = new Usuario();
$usuario->login("Gabriel","q1w2e3r4");

echo $usuario;
 ?>