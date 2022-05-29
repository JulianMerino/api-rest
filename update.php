
<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: PUT");
header("Access-Control-Allow-Headers: *");


$bd = include_once "bd.php";

if ($_SERVER["REQUEST_METHOD"] != "PUT") {
    exit("Solo acepto peticiones PUT");
}
$jsonUsuario = json_decode(file_get_contents("php://input"));

if (!$jsonUsuario) {
    exit("No hay datos");
}

$sentencia = $bd->prepare("UPDATE usuario SET nombre = ?, apellido = ?, telefono = ? WHERE id = ?");
$resultado = $sentencia->execute([$jsonUsuario->nombre, $jsonUsuario->apellido, $jsonUsuario->telefono, $jsonUsuario->id]);
echo json_encode($resultado);
