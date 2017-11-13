
<?php
require_once 'lib/init.php';
?>
<?php

  if(isset($_POST)&&
    !empty($_POST['email']) &&
    !empty($_POST['contrasenya'])){

    $email=htmlspecialchars($_POST['email']);
    $pass=md5(htmlspecialchars($_POST['contrasenya']));

    $sql="SELECT * FROM users WHERE email='$email' AND passwd ='$pass'";


    $res=$conn->query($sql);

    if ($res->num_rows != 0) {
      $row = $res->fetch_assoc();
      $_SESSION['user']['email'] = $email;
      $_SESSION['user']['id'] = $row['id'];

      header("Location:to-do.php");

    }else {
      echo("Usuario o contrasenya incorrecta. Intentalo de Nuevo.");
    }

}


  ?>
  <html>
    <head>
      <link rel="stylesheet" type="text/css" href="public/css/signin.css">
      <meta charset="utf-8">
      <title>Sign In</title>
    </head>
    <body>
   <h1 id="titulo">Sign In</h1>
   <div id="borde">
   <form action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
     <p id="email">Email:<input type="email" name="email" placeholder="ejemplo@gmail.com"></p>
     <p id="centro">Password:<input type="password" name="contrasenya" placeholder="***************"></p>
     <p id="atras"><input type="button" value="Volver Atras" onclick="history.back()">
     <p id="boton"><input type="submit" value="Sign in" name="Sign in"></p>
   </form>
    </div>
  </body>
</html>
