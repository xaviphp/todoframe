<?php
include 'head_common.php';
?>
    <body class="bregistrar">
      <link rel="stylesheet" type="text/css" href="public/css/signup.css">
<h1 id="titulo">Sign Up</h1>
<form action="/X-master/reg/reg2" method="post">

    <div id="div1">
        <p id="nom">Nom:<input type="text" name="nom" placeholder="pepe"></p>
        <p id="password">Password:<input type="password" name="pass1" placeholder="***************"></p>
        <p id="password2">Repetir Password:<input type="password" name="pass2" placeholder="***************"></p>
    </div>
    <div id="boton1">
        <input type="submit" name="enviar" value="Registrar" id="entrar">
    </div>

</form>
<a href="/X-master">Salir</a>
<?php
include 'footer_common.php';
?>
