<?php
	include 'head_common.php';
	?>
<body class="bentrar">
	<link rel="stylesheet" type="text/css" href="public/css/signin.css">

<h1 id="titulo">Sign In</h1>
<form action="/X-master/users/login" method="post">

            <p id="email">Usuario:
            <input type="text" name="nom"></p>

            <p id="centro">Password:
            <input type="password" name="pass1"></p>

    <div>
        <p class="Error"></p>
    </div>
    <div id="boton1">
        <input type="submit" name="enviar" value="Entrar" id="entrar">
    </div>
</form>
<a href="/X-master">Salir</a>
<?php
	include 'footer_common.php';

?>
