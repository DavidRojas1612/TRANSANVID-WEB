<?php
include("conexion.php");
function eliminar($ced){
  $link = Conectarse();
  $q = "select * from CHOFER where CEDULA = '$ced'";
  $r = mysqli_query($link,$q);
  $num = mysqli_num_rows($r);
  if($num == 0)
  {
    print ('Chofer No existe <a href="frmChofer.php">Regresar</a>');
  }else
  {
    $sql = "delete from CHOFER where CEDULA='$ced'";
    mysqli_query($link,$sql);
    header('Location: frmChofer.php');
  }
  mysqli_close($link);
}
$ced = $_GET['usuario'];
echo $ced;
eliminar($ced);
?>
