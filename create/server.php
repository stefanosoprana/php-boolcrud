<?php

  $name = $_POST['name'];
  $lastname = $_POST['lastname'];
  $date_of_birth = $_POST['date_of_birth'];
  $document_type = $_POST['document_type'];
  $document_number = $_POST['document_number'];

  if (empty($name) || empty($lastname) || empty($date_of_birth) || empty($document_type) || empty($document_number)) {
    die('errore');
  }

  include '../env.php';

  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    echo ("Connection failed: " . $conn->connect_error);
  }

  $sql = "INSERT INTO `ospiti` (`name`, `lastname`, `date_of_birth`, `document_type`, `document_number`)
          VALUES ('$name', '$lastname', '$date_of_birth', '$document_type', '$document_number');";

  $result = $conn->query($sql);

  var_dump($result); die();

  $conn->close();

?>
