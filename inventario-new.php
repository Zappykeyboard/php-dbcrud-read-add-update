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

  $name = $_GET['name'];
  $manufacturer = $_GET['manufacturer'];
  $price = $_GET['price'];
  $expiration = $_GET['expiration'];

  $query = "
  INSERT INTO inventario (nome_bevanda, marca, prezzo, data_di_scadenza)
    VALUES
    ('" . $name . "', '".
    $manufacturer . "', ".
    $price . ", '".
    $expiration . "')";

  $res = $connection ->query($query);


  $connection -> close();

  echo json_encode($res);
?>