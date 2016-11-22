<?php
	$u = $_POST['txtu'];
	$p = $_POST['txtc'];
	$con =  mysqli_connect('mydbinstance.c765otpnmdfd.us-west-2.rds.amazonaws.com','rengo','87654321','nrego');
  $q = "select 1 from LOGIN where LCEDULA='$u' and LCONTRASENA='$p'";
  $r = mysqli_query($con,$q);
	$num = mysqli_num_rows($r);
	if($num == 0){
		print ('Usuario no permitido <a href="../index.html">Regresar</a>');
	}else{
		mysqli_free_result($r);
		mysqli_close($con);
		header("location:../Inicio.html");
	}
?>