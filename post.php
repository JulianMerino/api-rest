
<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$jsonUsuario = json_decode(file_get_contents("php://input"));

if (!$jsonUsuario) {
    exit("No hay datos");
}
$bd = include_once "bd.php";
$sentencia = $bd->prepare("insert into usuario(nombre, apellido, telefono) values (?,?,?)");
$resultado = $sentencia->execute([$jsonUsuario->nombre, $jsonUsuario->apellido, $jsonUsuario->telefono]);
echo json_encode([
    "resultado" => $resultado,
]);
