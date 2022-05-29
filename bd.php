
<?php


$contraseña = "12345678";
$usuario = "root";
$nombre_base_de_datos = "inventario";
try {
    return new PDO('mysql:host=localhost;dbname=' . $nombre_base_de_datos, $usuario, $contraseña);
} catch (Exception $e) {
    echo "Ocurrió algo con la base de datos: " . $e->getMessage();
}
