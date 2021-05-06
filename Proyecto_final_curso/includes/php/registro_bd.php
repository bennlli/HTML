<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$telefono = $_POST['tlfn'];
$email = $_POST['email'];
$seccion = $_POST['seccion'];
$descripcion = $_POST['mensaje'];

$query = "INSERT INTO bd_contacto (nombre, telefono, email, seccion, informacion) 
VALUES ('$nombre','$telefono','$email','$seccion','$descripcion')";

$ejecutar = mysqli_query($conexion, $query);
if($ejecutar){
    echo 
    '<script>
        alert("Información enviada correctamente!");
        window.location = "../../index.php";
    </script>';
}else{
    echo'
    <script>
        alert("Intentalo de nuevo, hubo un problema");
        window.location = "../../index.php";
    </script>';
}
mysqli_close($conexion)


?>