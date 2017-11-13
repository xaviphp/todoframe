<?php
  // connection to DB
  // first thing to do: definiting domain name???
  $ip_domain=$_SERVER['SERVER_ADDR']:
  //if IP = localhost then take config.deb.ini config else take config.ini
  $conf=($ip_domain=='127.0.0.1')?'config.dev.ini': 'config.ini';

  $config=parse_ini_file($conf);

  try {
    $con=new mysqli($config['dbhost'],$config['dbuser'],
    $config['dbpass'],$config['dbname']);

  }catch(Excepcion $e){
    echo 'connectidb failed:'.$e->getMessage();
  }

  ?>










 ?>
