<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Main Rutas</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
  <link rel="stylesheet" href="estilos.css"><!--Enlace de los estilos del .css -->
  <title>Document</title>

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
          <li><a href="frmChofer.php">Choferes</a></li>
          <li><a href="frmBuses.php">Buses</a></li>
          <li><a href="frmMarcas.php">Marcas</a></li>
          <li><a href="frmMunicipio.php">Municipios</a></li>
          <li class="active"><a href="">Rutas</a></li>
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
  <div class="container">
    <br>
    <article class="col-md-6">
    <form action="" class="form-inline">
      <div class="form-group">
        <label for="codigoruta">Codigo Ruta:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input class ="form-control" id="codigoruta" type="text" placeholder="Escribe el codigo de tu ruta">
      </div>
    </form>
    <br>

      <form action="" class="form-inline">
        <div class="form-group">
          <label for="municipoorigen">Municipio Origen:&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input class ="form-control" id="municipoorigen" type="text" placeholder="Escribe el origen">
        </div>
      </form>
      <br>
    <form action="" class="form-inline">
      <div class="form-group">
        <label for="municipiodestino">Municipio Destino:&nbsp;&nbsp;&nbsp;</label>
        <input class ="form-control" id="municipiodestino" type="text" placeholder="Escribe tu destino">
      </div>
    </form>
    <br>

      <form action="" class="form-inline">
        <button class="btn btn-primary">Insertar</button>
        <button class="btn btn-primary">Borrar</button>
        <button class="btn btn-primary">Actualizar</button>
        <button class="btn btn-primary">Listar</button>
      </form>

</article>
<article class="col-md-6">
  <p>
    <?php
      include("conexion.php");
        function listRu()
        {
          $link = Conectarse();
          $result = mysqli_query($link,"SELECT * FROM RUTA;");

          echo '<table class="table table-bordered table-hover">';
          echo "<tr>";
          echo '<th class="info">'.CODIGO.'</th>';
          echo '<th class="warning">'.ORIGEN.'</th>';
          echo '<th class="succes">'.DESTINO.'</th>';
          echo "</tr>";

          while ($row = mysqli_fetch_row($result)){
            echo "<tr>";
            echo '<td class="info">'.$row[0].'</td>';
            echo '<td class="warning">'.$row[1].'</td>';
            echo '<td class="succes">'.$row[2].'</td>';
            echo "</tr>";
          }
          echo "</table>";
        }
        listRu();
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
