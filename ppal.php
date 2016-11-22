<?php
  include("conexion.php");
    function listBus()
    {
      $link = Conectarse();
      $result = mysqli_query($link,"SELECT * FROM BUS;");

      echo "<table>";
      echo "<tr>";
      echo "<th>placa</th>";
      echo "<th>marca_codigo</th>";
      echo "</tr>";
      print '<a href = "Menu.html"> Regresar </a><hr/>';
      while ($row = mysqli_fetch_row($result)){
        echo "<tr>";
        echo "<td>$row[0]></td>";
        echo "<td>$row[1]</td>";
        echo "</tr>";
      }
      echo "</table>";
    }
    listBUs();
?>
