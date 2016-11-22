<?php
  function Conectarse()
  {
   if (!($link=mysqli_connect('mydbinstance.c765otpnmdfd.us-west-2.rds.amazonaws.com','rengo','87654321','nrego')))
   {
      echo "Error conectando a la base de datos.";
      exit();
   }
   if (!mysqli_select_db($link,"nrego"))
   {
      echo "Error seleccionando la base de datos.";
      exit();
   }
   return $link;
  }
?>
