
<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: DELETE");
$metodo = $_SERVER["REQUEST_METHOD"];


if ($metodo != "DELETE" && $metodo != "OPTIONS") {
    exit("Solo se permite método DELETE");
}

if (empty($_GET["id"])) {
    exit("No hay id de mascota para eliminar");
}
$bd = include_once "bd.php";

$idUsuario=$_GET["id"];

$sentencia = $bd->prepare("DELETE FROM usuario WHERE id = ?");
$resultado = $sentencia->execute([$idUsuario]);

echo json_encode($resultado);
