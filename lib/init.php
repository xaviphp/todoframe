<?php
  session_start();
  ini_set('display_errors','1');


  $conn = new mysqli("localhost", "xlaguens_xavi", "123123", "xlaguens_todo");

  if ($conn->connect_errno) {
      echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;

  }
