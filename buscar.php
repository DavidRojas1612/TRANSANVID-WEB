<?php
include("conexion.php");
class buscar
{
	static function existe($cod)
	{
		$rta = false;
		$con = conexion::conectar();
		$q = "select * from bus where placa = $cod";
		$r = mysqli_query($q,$con);
		if(mysql_num_rows($r)>0)$rta=true;
		mysqli_close($con);
		return $rta;
	}
}
?>
