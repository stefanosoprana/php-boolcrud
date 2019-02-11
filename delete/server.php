<?php

  include '../env.php';

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    echo ("Connection failed: " . $conn->connect_error);
  }

  $id = $_POST['id'];

  $sql = "DELETE FROM `ospiti` WHERE `id` = $id;";

  $result = $conn->query($sql);

  if ($result) {
    echo 'OK';
  }
  else {
    echo 'KO';
  }

  $conn->close();

?>
