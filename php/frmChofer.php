!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Main Chofer</title>
  <meta name="viewport" content="width=|, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="../css/estilos.css">Enlace de los estilos del .css -->
</head>
<body>
  <header>
    <div class="container-fluid"><!-- Para centrar el titulo de la pagina -->
      <nav class="navbar navbar-default navbar-fixed-top navbar-inverse">
        <div class="container-fluid">
        <a href="#" class="navbar-brand">DavAnd</a>
        <div class="collapse navbar-collapse" id="navbar1">
        <ul class="nav navbar-nav">
          <li><a href="../Inicio.html">Inicio</a></li>
          <li class="active"><a href="">Choferes</a></li>
          <li><a href="frmBuses.php">Buses</a></li>
          <li><a href="frmMarcas.php">Marcas</a></li>
          <li><a href="frmMunicipio.php">Municipios</a></li>
          <li><a href="frmRutas.php">Rutas</a></li>
          <li><a href="frmViajes.php">Viajes</a></li>
        </ul>
        </div>
        </div>
      </nav>

    </div>

  </header>
<br>
<br>
<br>
  <div class="row-main container">
    <br>
    <form class="" name="f1"  method="GET" action="insertar.php">
      <article class="table-bordered col-xs-6">
        <br>
        <div class="form-group">
          <label for="Cedula">Cedula:&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input class ="form-control" name="Cedula" type="text" placeholder="Escribe tu Cedula">
        </div>
        <br>
        <div class="form-group">
          <label for="Nombre">Nombre:&nbsp;&nbsp;&nbsp;</label>
          <input class ="form-control" name="Nombre" type="text" placeholder="Escribe tu Nombre">
        </div>
        <br>
        <div class="form-group">
          <label for="Apellido1,2">Apellidos:&nbsp;</label>
          <input class ="form-control" name="Apellido1" type="text" placeholder="Escribe tu primer apellido">
          <input class ="form-control" name="Apellido2" type="text" placeholder="Escribe tu segundo apellido">
        </div>
        <br>
        <div class="form-group">
          <label for="Celular">Celular:&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input class ="form-control" name="Celular" type="text" placeholder="Escribe tu numero de celular">
        </div>
        <br>
        <input type="submit" class="btn btn-primary" value="Insertar">
      </article>
    </form>
  <article class="col-md-6">
    <p>
      <?php
      include("conexion.php");
        function listCh()
        {
          $link = Conectarse();
          $result = mysqli_query($link,"SELECT * FROM CHOFER;");
          echo '<table class="table table-bordered table-hover">';
          echo "<tr>";
          echo '<th class="info">'.CEDULA.'</th>';
          echo '<th class="warning">'.NOMBRE.'</th>';
          echo '<th class="succes">'.APELLIDO1.'</th>';
          echo '<th class="danger">'.APELLIDO2.'</th>';
          echo '<th class="info">'.CELULAR.'</th>';
          echo "</tr>";
          while ($row = mysqli_fetch_row($result)){
            echo "<tr>";
            echo '<td class="info">'.$row[0].'</td>';
            echo '<td class="warning">'.$row[1].'</td>';
            echo '<td class="succes">'.$row[2].'</td>';
            echo '<td class="danger">'.$row[3].'</td>';
            echo '<td class="info">'.$row[4].'</td>';
            echo "</tr>";
          }
          echo "</table>";
        }
        listCh();
    ?>
    </p>

  </article>
  </div>
  <br>
  <footer>
    <div class="container">
      <h3>Por David Y Andres</h3>
    </div>

  </footer>

</body>
</html>
