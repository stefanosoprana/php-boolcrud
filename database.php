<?php

  $servername = 'localhost';
  $username = 'root';
  $password = 'admin';
  $dbname = 'hotel_booleana';

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    echo ("Connection failed: " . $conn->connect_error);
  }

  $sql = 'SELECT * FROM `ospiti`';
  $result = $conn->query($sql);

  if ($result->num_rows > 0) {
    $ospiti = [];

    while ($row = $result->fetch_assoc()) {
      $ospiti[] = $row;
    }
  }


  $conn->close();

?>
