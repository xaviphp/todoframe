<?php
require_once 'lib/init.php';
$a=$conn->prepare("DELETE FROM items where id=?");
$a->bind_param("i",$_GET['task']);
$a->execute();
$a->close();
header('Location:mistareas.php');
?>
