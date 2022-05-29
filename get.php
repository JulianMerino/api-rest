
<?php
header("Access-Control-Allow-Origin: *");

$bd = include_once "bd.php";
/*if (empty($_GET["id"])) {
    exit("No hay id de usuario");
}
*/

$idUsuario =$_GET["id"];

$sentencia = $bd->prepare("select id, nombre, apellido, telefono from usuario where id = ?");
$sentencia->execute([$idUsuario]);
$usuario = $sentencia->fetchObject();
echo json_encode($usuario);
