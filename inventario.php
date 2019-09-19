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
    SELECT *
    FROM `inventario`
    ";

  $res = $connection ->query($query);

  $data = [];

  if ($res && $res -> num_rows > 0){

    while($row = $res -> fetch_assoc()) {

      $data[] = $row;
 
    }
  
  }

  $connection -> close();

  echo json_encode($data);
?>