<?php
 $servidor = "localhost";
 $usuario = "root";
 $password = "";
 $basedatos = "prueba3";

 $conexion = new mysqli($servidor, $usuario, $password, $basedatos);
if($conexion->connect_error) {
    die("Error de conexión: ".$conexion->connect_error);

}
echo "Conexión establecida...";

// Crear TABLA (verificar phpMyAdmin)
$sql = "CREATE TABLE pacientes_eps(
    id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    mensaje VARCHAR(500) NOT NULL
);";

if($conexion->query($sql)==TRUE) {
    echo "Tabla creada";

} else {
    echo "Error en la creación de la tabla".$conexion->error;
}


?>