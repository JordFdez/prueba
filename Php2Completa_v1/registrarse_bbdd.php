<?php

$nombre = $_REQUEST['nombre'];
$correo = $_REQUEST['correo'];
$pass = $_REQUEST['pass'];
$tipo = $_REQUEST['tipo'];

$conexion = mysqli_connect("localhost", "root", "rootroot") or die ("No se puede conectar con el servidor");

mysqli_select_db($conexion, "inmobiliaria") or die ("No se puede seleccionar la base de datos");

$instruccion1 = "insert into usuario values (NULL, '$nombre', '$correo', MD5('$pass'), '$tipo')";

$consulta = mysqli_query($conexion, $instruccion1) or die ("Fallo en la consulta");

if($consulta){
    print "Usuario registrado!!";
    print "<br><a href='./inicio_sesion.php'>Iniciar Sesion</a>";

}

else{
    print "Error!";
}

?>