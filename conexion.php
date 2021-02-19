<?php
$hostname = 'localhost';
$usuario = 'root';
$clave = '';
$dbnombre = 'examinando';

/*$hostname = 'localhost';
$usuario = 'root';
$clave = '';
$dbnombre = 'db_abarroteria';
*/
$conn = new mysqli($hostname, $usuario, $clave, $dbnombre);

if (mysqli_connect_errno()) {
    printf("Error al establecer conexión con el servidor. %s\n", mysqli_connect_errno());
    exit();
}

?>