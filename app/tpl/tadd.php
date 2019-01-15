<?php
include 'head_common.php';
?>
<link rel="stylesheet" type="text/css" href="public/css/mistareas.css">

    <h1 id="titulo">CREAR TAREA</h1>

    <form action="/X-master/add/taskadd" method="post">
        <div id="medio">
            <div><p>Nombre Tarea:</p> <input type="text" name="nom"></div>
            <div> <p>Descripcion:</p> <input type="text" name="desc"></div>
            <div><p>Estado:</p><SELECT id="sele" NAME="list">
                    <OPTION > Por La mitad </OPTION>
                    <OPTION > Recien Comenzada </OPTION>
                    <OPTION > Finalizada </OPTION>
                </SELECT></div>
        </div>
        <div id="boton">
            <input type="submit" name="enviar" value="Crear Tarea">
        </div>
    </form>
    <a id="Exit" href="/X-master/panel">Exit</a>

<?php

include 'footer_common.php';
?>
