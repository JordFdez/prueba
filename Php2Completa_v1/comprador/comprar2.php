<?php

$cod=$_REQUEST['cod_oculto'];

if ( $_REQUEST['si'] == "Si" ){
        $conexion = mysqli_connect ("localhost", "root", "rootroot") // conectar con el servidor
        or die ("No se puede conectar con el servidor.");
        
        mysqli_select_db ($conexion, "inmobiliaria") // seleccionar base de datos
        or die ("No se puede seleccionar la base de datos.");
        
        $intruccion1 = "delete from pisos where Codigo_piso=$cod";
        // echo $intruccion1 //para comprobar errores de mysql
        
        $consulta = mysqli_query ($conexion, $intruccion1)
        or die ("Fallo en la consulta");
        
        if ($consulta){ // comprobar que la consulta es verdadera (query ok).
            echo "<script language='javascript'>
            alert('¡¡¡Compra realizada!!!');
            window.location.replace('./index.php');
            </script>";
        }
        else{
            print "Compra erronea!!.";
        }
        
        //cerrar conexion
        mysqli_close($conexion);

}

else if ( $_REQUEST['no'] == "No" ){
    header('Location:./comprar.php');
}

?>