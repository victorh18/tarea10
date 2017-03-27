<?php
  //Declaro la clase
  class plantilla{
    static $instancia;

    static function inicio(){
      self::$instancia = new plantilla();

    }

    function __construct(){
?>
  <!--Diseño de la plantilla-->
  <!DOCTYPE html>
  <html lang="en">

  <head>
      <meta charset="utf-8">
      <title>Twitter :v</title>
      <!--Invocacion del bootstrap-->
      <link href="<?php echo base_url('base')?>/css/bootstrap.min.css" rel="stylesheet" />
  </head>

  <body onload="getMensajes();">
    <h1>Me gusta el chocolate</h1>
    <h2>Ojala funcione</h2>
    <hr />

    <!--Para lo que sea que tenga el contenido-->
    <div class="container" id="mensajes">

<?php
    }

    function __destruct(){
      ?>
      </div>
      <!--footer-->
      <hr />
        <footer>
          <div class="row">
            <div class="col-lg-12">
              <p>
                Copyleft &copy; FULLY AUTOMATED LUXURY GAY SPACE COMMUNISM
              </p>
            </div>
          </div>
          <?php echo $_SESSION?>
        </footer>


      <!-- jQuery -->
     <script src="<?php echo base_url('base') ?>/js/jquery.js"></script>

     <!-- Bootstrap Core JavaScript -->
     <script src="<?php echo base_url('base') ?>/js/bootstrap.min.js"></script>

     <script src="<?php echo base_url('') ?>/js/code.js"></script>



      <?php
    }

  }
 ?>
