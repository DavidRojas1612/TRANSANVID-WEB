<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Main Viajes</title>
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
          <li><a href="frmRutas.php">Rutas</a></li>
          <li class="active"><a href="">Viajes</a></li>
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
        <label for="Cedula">Cedula:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input class ="form-control" id="Cedula" type="text" placeholder="Escribe tu Cedula">
      </div>
    </form>
    <br>

      <form action="" class="form-inline">
        <div class="form-group">
          <label for="cRuta">Codigo Ruta:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input class ="form-control" id="cRuta" type="text" placeholder="Escribe tu Ruta">
        </div>
      </form>
      <br>
    <form action="" class="form-inline">
      <div class="form-group">
        <label for="Placa">Placa:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
        <input class ="form-control" id="Placa" type="text" placeholder="Escribe la placa">
      </div>
    </form>
    <br>
      <form action="" class="form-inline">
        <div class="form-group-">
          <label for="Fecha_v">Fecha del Viaje:&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <select class="form-control form-control-sm">
            <option>Dia
              <option>1</option>
              <option>2</option>
              <option>3</option>
              <option>4</option>
              <option>5</option>
              <option>6</option>
              <option>7</option>
              <option>8</option>
              <option>9</option>
              <option>10</option>
              <option>11</option>
              <option>12</option>
              <option>13</option>
              <option>14</option>
              <option>15</option>
              <option>16</option>
              <option>17</option>
              <option>18</option>
              <option>19</option>
              <option>20</option>
              <option>21</option>
              <option>22</option>
              <option>23</option>
              <option>24</option>
              <option>25</option>
              <option>26</option>
              <option>27</option>
              <option>28</option>
              <option>29</option>
              <option>30</option>
              <option>31</option>
            </option>
          </select>
          <select class="form-control form-control-sm">
            <option>Mes
              <option>Enero</option>
              <option>Febrero</option>
              <option>Marzo</option>
              <option>Abril</option>
              <option>Mayo</option>
              <option>Junio</option>
              <option>Julio</option>
              <option>Agosto</option>
              <option>Septiembre</option>
              <option>Octubre</option>
              <option>Noviembre</option>
              <option>Diciembre</option>
            </option>
          </select>
          <select class="form-control form-control-sm">
            <option>Año
              <option>2000</option>
              <option>2001</option>
              <option>2002</option>
              <option>2003</option>
              <option>2004</option>
              <option>2005</option>
              <option>2006</option>
              <option>2007</option>
              <option>2008</option>
              <option>2009</option>
              <option>2010</option>
              <option>2011</option>
              <option>2012</option>
              <option>2013</option>
              <option>2014</option>
              <option>2015</option>
              <option>2016</option>
            </option>
          </select>
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
        function listVj()
        {
          $link = Conectarse();
          $result = mysqli_query($link,"SELECT * FROM VIAJES;");

          echo '<table class="table table-bordered table-hover">';
          echo "<tr>";
          echo '<th class="info">'.CEDULA.'</th>';
          echo '<th class="warning">'.RUTA.'</th>';
          echo '<th class="succes">'.PLACA.'</th>';
          echo '<th class="fecha">'.FECHA.'</th>';
          echo "</tr>";
          while ($row = mysqli_fetch_row($result)){
            echo "<tr>";
            echo '<td class="info">'.$row[0].'</td>';
            echo '<td class="warning">'.$row[1].'</td>';
            echo '<td class="succes">'.$row[2].'</td>';
            echo '<td class="danger">'.$row[3].'</td>';
            echo "</tr>";
          }
          echo "</table>";
        }
        listVj();
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
