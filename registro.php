<?php 

include_once('db.php');

$nombres=$_POST['nombres'];
$apellidos=$_POST['apellidos'];
$direccion=$_POST['direccion'];
$telefono=$_POST['telefono'];
$usuario=$_POST['usuario'];
$clave=$_POST['clave'];


//Conexion al servidor

echo "Los datos son los siguientes: <br>";

echo "$nombres, $apellidos, $direccion, $telefono, $usuario y $clave"


$conectar "conn ()"//ejecuta las conexiones a la b.d 
$sql = "INSERT INTO  ususarios (usuario,nombres, apellidos,direccion , telefono,contraseña)
VALUES ('$usuario','$nombres' ,'$apellidos' ,'$direccion' , '$telefono','$clave')";
$resul= msqli_query($conectar, $sql)or trigger_error("Query Failed! SQL-Error: "mysqli_error ($conectar),
E_USER_ERROR);
echo "$sql";

?>

