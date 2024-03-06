<?php
   $nombre_form = $_POST ['nombre'];
   $apellido_form = $_POST ['apellido'];
   $correo_form = $_POST ['correo'];
   $mensaje_form = $_POST ['mensaje'];

//Conexion a Base de Datos

/*$conexion = mysqli_connect('localhost', 'root', "", 'programador_web_inicial_204') or exit ('No se pudo conectar a la base de datos');
*/

$conexion = mysqli_connect('localhost', 'id21766822_knuckles', "Knuckles55*", 'id21766822_programador_web_inicial') or exit ('No se pudo conectar a la base de datos');

$query = "INSERT INTO consultas VALUES (DEFAULT, '$nombre_form', '$apellido_form', '$correo_form', '$mensaje_form' )";

$resultado = mysqli_query($conexion, $query);

if ($resultado){
    header("location:contacto.php?ok");
} else{
    echo 'Error en la insercion', mysqli_error($conexion);
}

mysqli_close($conexion);


?>