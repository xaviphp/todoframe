
<?php
require_once 'lib/init.php';
?>

<?php

  if (isset($_POST)&&
          !empty($_POST['nom'])&&
          !empty($_POST['email'])&&
          !empty($_POST['password'])&&
          !empty($_POST['rpassword'])&&
        $_POST['password']===$_POST['rpassword']) {

            $nom=htmlspecialchars($_POST['nom']);
            $email=htmlspecialchars($_POST['email']);
            //encriptamos password
            $pass=md5(htmlspecialchars($_POST['password']));

            $dades=array(
              'nom'=>$nom,
              'email'=>$email,
              'pass'=>$pass
            );


            mysqli_query($conn, "INSERT INTO users (username, passwd, email)
            VALUES ('$nom', '$pass', '$email') ");

            header("Location:index.php");
          }

 ?>
 <html>
   <head>
     <link rel="stylesheet" type="text/css" href="public/css/signup.css">
     <meta charset="utf-8">
     <title>Sign Up</title>
   </head>
   <body>
     <h1 id="titulo">Sign Up</h1>
     <div id="borde">
     <form  action="<?= $_SERVER['PHP_SELF']; ?>" method="post">
       <p id="nom">Nom:<input type="text" name="nom" placeholder="pepe"></p>
       <p id="email">Email:<input type="email" name="email" placeholder="ejemplo@gmail.com"></p>
       <p id="password">Password:<input type="password" name="password" placeholder="***************"></p>
       <p id="password2">Repetir Password:<input type="password" name="rpassword" placeholder="***************"></p>
       <p id="atras"> <input type="button" value="Volver Atras" onclick="history.back()">
      <p id="boton"><input type="submit" name="submit" value="Sign up"></p>
     </form>
   </div>

   </body>
 </html>
