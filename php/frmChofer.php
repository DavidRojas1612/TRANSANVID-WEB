!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Main Chofer</title>
  <meta name="viewport" content="width=|, initial-scale=1.0">
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
     <link rel="stylesheet" href="../css/estilos.css"><!--Enlace de los estilos del .css -->
     <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet"></link>
     <link href="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css" rel="stylesheet"></link>
     <link rel="stylesheet" href="https://rawgit.com/Eonasdan/bootstrap-datetimepicker/master/build/css/bootstrap-datetimepicker.min.css"/>

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
        <ul class="nav navbar-nav navbar-right">
          <li><a href="../index.html">Log out</a></li>
        </ul>
        </div>
        </div>
      </nav>

    </div>

  </header>
<br>
<br>
<br>

<article class="col-md-6">
  <form id="registrationForm" method="GET" class="form-horizontal mitad" action="insertar.php">
        <br>
            <div class="form-group">
              <label style="color:white" class="col-md-5 control-label">Cedula</label>
              <div class="col-md-5">
                <input type="text" class="form-control" name="cedula" placeholder="Escribe tu Cedula"/>
              </div>
            </div>
            <div class="form-group">
              <label style="color:white" class="col-md-5 control-label">Nombre</label>
              <div class="col-md-5">
                <input type="text" class="form-control" name="nombre" placeholder="Escribe tu Nombre"/>
              </div>
            </div>
            <div class="form-group">
              <label style="color:white" class="col-md-5 control-label">Apellidos</label>
              <div class="col-md-5">
                <input type="text" class="form-control" name="apellido1" placeholder="Escribe tu primer apellido"/>
                <br>
              <div class="col-md-20">
                <input type="text" class="form-control" name="apellido2" placeholder="Escribe tu segundo apellido"/>
              </div>
            </div>
          </div>
            <div class="form-group">
              <label style="color:white" class="col-md-5 control-label">Celular</label>
              <div class="col-md-5">
                <input type="text" class="form-control" name="celular" placeholder="Escribe tu numero de celular"/>
              </div>
            </div>
         <div class="form-group">
              <div class="col-md-9 col-lg-offset-3">
                <button type="submit" class="btn btn-success left">Registrarse</button>
              </div>
            </div>

  </form>

        <div class="col-md-9 col-lg-offset-3">
          <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#loginModal">
          <span></span> Borrar</button>
          <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#loginModal2">
          <span></span> Actualizar</button>
        </div>
          <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
          <div class="modal-dialog">
          	 <div class="modal-content">
          		 <div class="modal-header">
          			 <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
          			 <h4 class="modal-title">Eliminar Chofer</h4>
          		 </div>
               <div class="modal-body">
          			 <form id="loginForm" method="GET" class="form-horizontal" action="borrar.php">
          				 <div class="form-group">
          					 <label class="col-md-3 control-label">Cedula</label>
          					 <div class="col-md-7">
          						 <input type="text" class="form-control" name="usuario" />
          					 </div>
          				 </div>
                   <div class="form-group">
          					 <div class="col-md-5 col-md-offset-3">
          						 <button type="submit" class="btn btn-warning">Borrar</button>
          					 </div>
                   </div>
                  </form>
                </div>
             </div>
           </div>
         </div>
           <br>
            <br>

               <div class="modal fade" id="loginModal2" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
               <div class="modal-dialog">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                      <h4 class="modal-title">Actualizar Chofer</h4>
                    </div>
                    <div class="modal-body">
                      <form id="loginForm2" method="GET" class="form-horizontal" action="actualizar.php">
                        <div class="form-group">
                          <label class="col-md-3 control-label">Cedula</label>
                          <div class="col-md-7">
                            <input type="text" class="form-control" name="usuario" placeholder="Escribe tu cedula"/>
                          </div>
                        </div>
                       <div class="form-group">
                         <label class="col-md-3 control-label">Nombre</label>
                         <div class="col-md-7">
                           <input type="text" class="form-control" name="nombre" placeholder="Escribe tu Nombre"/>
                         </div>
                       </div>
                       <div class="form-group">
                         <label class="col-md-3 control-label">Apellidos</label>
                         <div class="col-md-7">
                           <input type="text" class="form-control" name="apellido1" placeholder="Escribe tu primer apellido"/>
                           <br>
                         <div class="col-md-20">
                           <input type="text" class="form-control" name="apellido2" placeholder="Escribe tu segundo apellido"/>
                         </div>
                       </div>
                     </div>
                       <div class="form-group">
                         <label class="col-md-3 control-label">Celular</label>
                         <div class="col-md-7">
                           <input type="text" class="form-control" name="celular" placeholder="Escribe tu numero de celular"/>
                         </div>
                       </div>
                        <div class="form-group">
                          <div class="col-md-5 col-md-offset-3">
                            <button type="submit" class="btn btn-primary">Actualizar</button>
                          </div>
                      </div>
                    </form>
                      </div>
                      </div>
                      </div>
                    </div>

  </article>

  <div class="container-fluid">
  <script src="//oss.maxcdn.com/jquery/1.11.1/jquery.min.js"></script>
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
  <script src="//oss.maxcdn.com/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>
  <script type="text/javascript" src="../js/validatorForm.js"></script>
  <script type="text/javascript" src="../js/eliminar.js"></script>
  <script type="text/javascript" src="../js/actualizar.js"></script>
  <script src="//oss.maxcdn.com/momentjs/2.8.2/moment.min.js"></script>
  <script src="https://rawgit.com/Eonasdan/bootstrap-datetimepicker/master/src/js/bootstrap-datetimepicker.js"></script>

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
          echo '<th class="info">'.APELLIDO1.'</th>';
          echo '<th class="danger">'.APELLIDO2.'</th>';
          echo '<th class="info">'.CELULAR.'</th>';
          echo "</tr>";
          while ($row = mysqli_fetch_row($result)){
            echo "<tr>";
            echo '<td class="info">'.$row[0].'</td>';
            echo '<td class="warning">'.$row[1].'</td>';
            echo '<td class="info">'.$row[2].'</td>';
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
      <h3 style="color:white">Por David Y Andres</h3>
    </div>

  </footer>

</body>
</html>
