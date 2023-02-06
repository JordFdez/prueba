<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Registro</title>
</head>
<body>
    <h4>Registrase</h4>
    <form action="registrarse_bbdd.php" method="get">
        Nombre: <input type="text" name="nombre"><br>
        Correo: <input type="email" name="correo"><br>
        Clave: <input type="password" name="pass"><br>
        Tipo de usuario: 
        Comprador<input type="radio" name="tipo" value="comprador">
        Vendedor<input type="radio" name="tipo" value="vendedor"><br><br>

        <input type="submit" name="registrarse" value="Registrarse">
    </form>

</body>
</html>
