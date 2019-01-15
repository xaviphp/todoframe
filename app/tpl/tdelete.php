<?php
include 'head_common.php';
?>
<link rel="stylesheet" type="text/css" href="public/css/mistareas.css">

    <h1 id="titulo">BORRAR TAREA</h1>

    <form action="/X-master/delete/taskdelete" method="post">
        <div id="divbasico">
            <input type="text" name="idborrar" placeholder="ID Tarea A Borrar" />
            <input type="submit" value="Borrar" />
        </div>

    </form>
    <a id="Exit" href="/X-master/panel">Exit</a>
<?php
include 'footer_common.php';
?>
