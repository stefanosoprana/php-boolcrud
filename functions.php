<?php

  function findOspiteById($id){

    include 'env.php';

    $ospite = [];

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
      return $ospite;
    }

    $sql = "SELECT * FROM `ospiti` WHERE `id` = $id LIMIT 1";
    $result = $conn->query($sql);

    if ($result->num_rows > 0)
    {
      $ospite = $result->fetch_assoc();
    }

    return $ospite;
    
  }
 ?>
