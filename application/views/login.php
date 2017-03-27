<?php
  session_start();

  if($_SERVER["REQUEST_METHOD"] == "POST"){
    $usuario = "victorh18";
    $contrasena = "GODBELONGSTOME";

    //session_register('usuario');
    $_SESSION['login_user'] = "lol";
    header("location: http://localhost/tarea9/index.php/welcome/twit");

  }

?>


<html>
  <head>
    <link rel="stylesheet" href="<?php echo base_url('base')?>/css/bootstrap.min.css" />
    <script src="<?php echo base_url('base')?>/js/jquery.js"></script>
    <script src="<?php echo base_url('base')?>/js/bootstrap.min.js"></script>

    <title>Login | Twitter</title>

  </head>

  <body>
    <div class="container" style="position: absolute; top: 25%; left: 40%">
      <h3>Logueate</h3>
      <form method="post">
        <div class="row">
          <div class="col col-sm-6">
            <!--Div del nombre de usuario-->
            <div class="form-group input-group">
              <span input-group-addon>Nombre de usuario</span>
              <input class="form-control" type="text" name="nombreUsuario" id="txtUsuario" />
            </div>

            <!--Div de la contrasena-->
            <div class="form-group input-group">
              <span class="group-control-addon">Contrasena</span>
              <input class="form-control" type="password" name="contrasena" id="txtContrasena" />

            </div>

            <!--Boton-->
            <div class="text-center">
              <button type="submit" class="btn btn-default">Entrar</button>
            </div>

          </div>

        </div>
      </form>


      </div>

    </div>

  </body>


</html>
