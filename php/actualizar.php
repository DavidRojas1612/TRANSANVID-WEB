<?php
	include("conexion.php");
	function nuevo($ced, $nom, $ap1, $ap2, $cel){
		$link = Conectarse();
		$q = "select 1 from CHOFER where CEDULA= $ced";
		$r = mysqli_query ($link,$q);
			if(mysqli_num_rows($r) == 0){

					print '<b>Chofer no existe </b> <a href = "../Inicio.html">Regresar</a>';
				}else{
					$q1 =  "update CHOFER set NOMBRE = '$nom', APELLIDO1 = '$ap1', APELLIDO2 = '$ap2' , CELULAR = '$cel' where CEDULA = '$ced';";
					mysqli_query($link,$q1);
				  header('Location: frmChofer.php');

				}//if else
				mysqli_close($link);
			}//nuevo
		$ced = $_GET['usuario'];
		$nom = $_GET['nombre'];
		$ap1 = $_GET['apellido1'];
		$ap2 = $_GET['apellido2'];
		$cel = $_GET['celular'];
		nuevo($ced, $nom, $ap1, $ap2, $cel);
?>
