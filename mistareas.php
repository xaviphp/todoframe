<html>
  <head>
    <title> Mis tareas </title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="public/css/mistareas.css">
  </head>
  <body>
    <h1 id="titulo" class="header">To-Do List. Mis Tareas</h1>
    <table id="borde">
      <tr>
      <td class="porcentaje1">Tarea</td>
      <td class="porcentaje1">Estado</td>
      <td class="porcentaje1">Fecha Creación</td>
      <td class="porcentaje1">Id de la Tarea</td>
      <td class="porcentaje1">Eliminar Tarea</td>
      </tr>
      </table>
    <?php
      require_once './lib/init.php';
      if ($conn->connect_errno)
      {
          echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
      }
      else
      {
        $sql = "SELECT name, done, created, id FROM items WHERE user = '".$_SESSION['user']['id']."'";
        $res = $conn->query($sql);
        echo "<table id='borde'>";
        while($fila = $res->fetch_row())
        {
                if($fila[1]==0)
                {
                  $done = "No hecha";
                }
                else
                {
                  $done = "Hecha";
                }

                echo "<tr>";
                echo "<td class='porcentaje'>$fila[0]</td>";
                echo "<td class='porcentaje'>$done</td>";
                echo "<td class='porcentaje'>$fila[2]</td>";
                echo "<td class='porcentaje'>$fila[3]</td>";
                echo "<td class='porcentaje'><button type='button'><a href='eliminar.php?task=$fila[3]'>Eliminar</a></button></td>";
                echo "</tr>";
        }
        echo "</table";
        $res->close();
      }
    ?>
    <br>
    <form action="to-do.php" method="post">
    <a href="to-do.php" target="_self"><input id="crear" type="button" value="Crear otra Tarea">
    <a href="logout.php" target="_self"><input id="salir" type="button" value="Logout">
    </form>
    </div>
  </body>
</html>
