<?php

  include '../env.php';

  $id = $_POST['id'];
  $name = $_POST['name'];
  $lastname = $_POST['lastname'];
  $date_of_birth = $_POST['date_of_birth'];
  $document_type = $_POST['document_type'];
  $document_number = $_POST['document_number'];

  if (empty($id) || empty($name) || empty($lastname) || empty($date_of_birth) || empty($document_type) || empty($document_number)) {
    die('errore');
  }


  $conn = new mysqli($servername, $username, $password, $dbname);

  if ($conn->connect_error) {
    echo ("Connection failed: " . $conn->connect_error);
  }

  $sql = "UPDATE `ospiti`
          SET `name` = '$name',
              `lastname` = '$lastname',
              `date_of_birth` = '$date_of_birth',
              `document_type` = '$document_type',
              `document_number` = '$document_number'
          WHERE `id` = $id; ";

  $result = $conn->query($sql);

  if ($result == true) {
    echo 'OK';
  }
  else {
    echo 'KO';
  }

  $conn->close();

?>
