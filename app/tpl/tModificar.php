<?php
include 'head_common.php';
?>
<link rel="stylesheet" type="text/css" href="public/css/mistareas.css">

    <h1 id="titulo">MODIFICAR TAREA</h1>
    <div id="divbasico">
        <form action="/X-master/modificar/taskmod" method="post">
            <a>ID:</a><input type="text" name="idborrar" placeholder="ID Tarea a Modificar" />
            <a>Nuevo Estado:</a><SELECT id="sele" NAME="list">
                <OPTION > Por La mitad </OPTION>
                <OPTION > Recien Comenzada</OPTION>
                <OPTION > Finalizada </OPTION>
            </SELECT>
            <input type="submit" value="Modificar" />
    </div>
    <a id="Exit" href="/X-master/panel">Exit</a>
    </form>
<?php
include 'footer_common.php';
?>
