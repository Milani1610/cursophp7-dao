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
//$usuario = new Usuario();
//$usuario->login("Gabriel","q1w2e3r4");
//echo $usuario;

//Inserindo um usuario novo
//$aluno = new Usuario("Gabriel","@lun1");
//$aluno->insert();
//echo $aluno;

//Update de um usuario
$usuario = new Usuario();
$usuario->loadByid(8);
$usuario->update("jose", "456123");
echo $usuario;

?>