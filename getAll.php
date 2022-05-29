<?php 

header('Access-Control-Allow-Origin: *'); 
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");


$bd = include_once "bd.php";
$sentencia = $bd->query("select * from usuario");
$usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);

echo json_encode($usuarios);

?>