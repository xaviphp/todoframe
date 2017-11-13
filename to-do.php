
<?php
require_once './lib/init.php';
$email = $_SESSION['user']['email'];
echo "Bienvenido: $email";

if(isset($_POST) &&
  !empty($_POST['task']))
  {
    $tarea = $_POST['task'];

    if (!empty($_POST['task']))
    {

      if ($conn->connect_errno)
      {
          echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
      }
      else
      {
        $sql = "INSERT INTO items (name, user , done, created) VALUES ('$tarea','".$_SESSION['user']['id']."', 0,now())";
        $res = $conn->query($sql);
      }
    }
  }
 ?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="public/css/to-do.css">
    <title>To-Do List</title>
  </head>
  <body>
    <div class="list">
    <h1 id="titulo" class="header">To-Do List</h1>
    <form class="item-add" action="<?php $_SERVER["PHP_SELF"] ?>" method="post">
        <input type="text" name="task" placeholder="Inserta tu nueva tarea" class="input" autocomplete="off" required>
        <input type="submit" value="Add" class="submit">
    </form>
    <form class="item-add" action="mistareas.php" method="post">
        <input type="submit" value="Mis tareas" class="submit" id="tareas">
        <a href="logout.php" target="_self"><input id="salir" type="button" value="Logout">
    </form>

  </body>
</html>
