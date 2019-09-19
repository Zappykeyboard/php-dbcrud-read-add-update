<?php
  header('Content-type: application/json');


  $serverName = 'localhost';
  $dbUser = 'root';
  $dbPass = 'root';
  $dbName = 'PubDB';

  $connection = new mysqli($serverName, $dbUser, $dbPass, $dbName);

  if ($connection -> connect_error){
    var_dump('error');
    var_dump($connection);
    die();
  }

  $query = "
    SELCT *
    FROM inventario
    ";

  $res = $connection ->query($query);

  $connection -> close();

  echo json_encode($res);
?>