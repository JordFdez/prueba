<html>
    <head>
    <link rel="stylesheet" type="text/css" href="./style.css">
    <link rel="stylesheet" type="text/css" href="./inicio_sesion.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
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
      <a href="./index.php">Inicio</a>
      <a href="./inicio_sesion.php">Inicio de Sesion</a>
      <a href="piso_add.php" >Añadir</a>
      <a href="listar.php" >Listar</a>
      <a href="buscar.php" >Buscar</a>
      <a href="comprar.php" >Comprar</a>
      </div>
    </div>
    
      <div class="column">
      <div class="container">
    <div class="backbox">
      <div class="loginMsg">
        <div class="textcontent">
          <p class="title">¿No tienes una cuenta?</p>
          <p>Registrate para acceder a todo.</p>
          <button id="switch1">Registrarse</button>
        </div>
      </div>
      <div class="signupMsg visibility">
        <div class="textcontent">
          <p class="title">¿Tienes una cuenta?</p>
          <p>Inicia sesion para acceder a todo.</p>
          <button id="switch2">Iniciar Sesion</button>
        </div>
      </div>
    </div>
    <!-- backbox -->

    <div class="frontbox">
      <div class="login">
        <h2>Iniciar Sesion</h2>
        <div class="inputbox">
          <form action="inicio_sesion2.php" method="get">
            <input type="email" name="correo" placeholder="  EMAIL"> <br>
            <input type="password" name="pass" placeholder="  PASSWORD"><br><br>
            <input type="submit" id="iniciar_sesion" name="iniciar" value="Iniciar Sesion">
        </form>
        </div>
      </div>

      <div class="signup hide">
        <h2>Registrarse</h2>
        <div class="inputbox">
        <form action="registrarse_bbdd.php" method="get">
        <input type="text" name="nombre" placeholder="  NOMBRE" ><br>
        <input type="email" name="correo" placeholder="  EMAIL"><br>
        <input type="password" name="pass" placeholder="  PASSWORD"><br>
        Tipo de usuario: <br>
        Comprador<input type="radio" class="opcion" name="tipo" value="comprador">
        Vendedor<input type="radio" class="opcion" name="tipo" value="vendedor">
        </div>
       

        <input type="submit" id="registrarse" name="registrarse" value="Registrarse">
    </form>
      </div>

    </div>
    <!-- frontbox -->
  </div>
             </div>
        
    </body>
    <script  src="./inicio_sesion.js" ></script>
</html>

