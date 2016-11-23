<?php
	include("conexion.php");
	function nuevo($ced, $nom, $ap1, $ap2, $cel){
		$link = Conectarse();
		$q = "select 1 from CHOFER where CEDULA= $ced";
		$r = mysqli_query ($link,$q);
			if(mysqli_num_rows($r) > 0){

					print '<b>Chofer ya existe </b> <a href = "../Inicio.html">Regresar</a>';
				}else{
					$q1 = "Insert into CHOFER (CEDULA,NOMBRE,APELLIDO1,APELLIDO2,CELULAR) values ('$ced','$nom','$ap1','$ap2',$cel);";
					mysqli_query($link,$q1);
				  header('Location: frmChofer.php');

				}//if else
				mysqli_close($link);
			}//nuevo
		$ced = $_GET['cedula'];
		$nom = $_GET['nombre'];
		$ap1 = $_GET['apellido1'];
		$ap2 = $_GET['apellido2'];
		$cel = $_GET['celular'];
		nuevo($ced, $nom, $ap1, $ap2, $cel);
?>
