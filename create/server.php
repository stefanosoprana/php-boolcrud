<?php

  include '../env.php';

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    echo ("Connection failed: " . $conn->connect_error);
  }

  var_dump('connesso'); die();

  $conn->close();

?>
