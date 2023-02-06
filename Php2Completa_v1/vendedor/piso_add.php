<?php
session_start();

if (isset($_REQUEST['agregar'])){
$cod_piso = trim($_REQUEST['cod_piso']);
$calle = trim($_REQUEST['calle']);
$numero = trim($_REQUEST['numero']);
$piso = trim($_REQUEST['piso']);
$puerta = trim($_REQUEST['puerta']);
$cp = trim($_REQUEST['cp']);
$metros = trim($_REQUEST['metros']);
$zona = trim($_REQUEST['zona1']);
$precio = trim($_REQUEST['precio']);

$copiarFichero = false;
if ($cod_piso=="" || $calle=="" || $numero=="" || $piso=="" || $puerta=="" || $cp=="" || $metros=="" || $zona=="" || $precio==""){
    echo "<script language='javascript'>
    alert('¡¡¡Valores erroneos !!!');
    window.location.replace('./piso_add.php');
</script>";
}
else if (is_uploaded_file ($_FILES['imagen_up']['tmp_name']))
{
    $nombreDirectorio = "C:/xampp/htdocs/prueba/BBDD/Php2Completa/admin/img/";
    $nombreFichero = $_FILES['imagen_up']['name'];
    $copiarFichero = true;

    //si ya existe un fichero con el mismo nombre, renombrarlo
    $nombreCompleto = $nombreDirectorio . $nombreFichero;
    if (is_file($nombreCompleto)){
        $idUnico = time();
        $nombreFichero = $idUnico . "-" . $nombreFichero;

        echo "----" . $nombreFichero . "----";
    }
}

else if ($_FILES['imagen_up']['error'] == UPLOAD_ERR_FORM_SIZE){
    $maxsize = $_REQUEST['MAX_FILE_SIZE'];
    $nombreFichero = "";
}

if ($copiarFichero){
    move_uploaded_file ($_FILES['imagen_up']['tmp_name'], $nombreDirectorio . $nombreFichero);

}


$conexion = mysqli_connect("localhost", "root", "rootroot") or die ("No se puede conectar con el servidor");

mysqli_select_db($conexion, "inmobiliaria") or die ("No se puede seleccionar la base de datos.");

$intruccion = "insert into pisos (codigo_piso, calle, numero, piso, puerta, cp, metros, zona, precio, imagen) values ($cod_piso ,'$calle', $numero, $piso, '$puerta', $cp, $metros, '$zona', $precio, '$nombreFichero' )";

$consulta = mysqli_query($conexion, $intruccion) or die ("Fallo en la consulta");

if ($consulta){
    echo "<script language='javascript'>
    alert('¡¡¡Piso añadido !!!');
    window.location.replace('./index.php');
</script>";
}
else{
    print "Piso no dado de alta!!";
}

mysqli_close($conexion);

}
else{
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>

    <div class="header">
      <h1>Inmboliaria Fernández Bueno S.L</h1>
      <p class="eslogan">"Fernández Bueno SL, la solución ideal
para encontrar tu hogar real,
con profesionales de verdad,
tu búsqueda terminará bien hecha."</p>
    </div>
    
    <div class="topnav">
      <div class="medio">
      <a href="piso_add.php" >Añadir</a>
        <a href="listar.php" >Listar</a>
      </div>
    </div>
    
      <div class="column">
      <form action="piso_add.php" method="POST" ENCTYPE="multipart/form-data">
        Codigo de piso: <input type="number" name="cod_piso"><br>
        Calle: <input type="text" name="calle"><br>
        Numero: <input type="text" name="numero"><br>
        Piso: <input type="number" name="piso"><br>
        Puerta: <input type="text" name="puerta"><br>
        CP: <input type="number" name="cp"><br>
        Metros: <input type="number" name="metros"><br>
        ZONA: <select name="zona1">
                    <option value="%">todas las zonas</option>
                    <option value="madrid">Madrid</option>
                    <option value="lapeseta">La peseta</option>
                    <option value="carabanchel">Carabanchel</option>
                    <option value="rozas">Las Rozas</option>
                    <option value="atocha">ATOCHA</option>
              </select>  <br>
        Precio: <input type="text" name="precio"><br>
        Imagen: <input type="Hidden" name="MAX_FILE_SIZE" value="1024000" >
        <input type="FILE" name="imagen_up" ><br>

        <br><input type="submit" name="agregar" value="Agregar"><br><br>
        <a href='./index.php'>Volver al Menu</a>

    </form>
      </div>
    
    </body>
    </html>

<?php
}
?>
