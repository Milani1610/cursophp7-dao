<?php 

require_once("config.php");

$root = new Usuario();

$root->loadByid(1);

echo $root;
 ?>