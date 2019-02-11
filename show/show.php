<?php include '../partials/_head.php'; ?>
<?php include '../partials/_navbar.php'; ?>

<?php

  include '../functions.php';

  $ospite = findOspiteById($_GET['id']);

  if (empty($ospite)){
    die('ID non trovato');
  }

?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <div class="card">
        <div class="card-header">
          Ospite con ID <?php echo $ospite['id']; ?>
        </div>
        <ul class="list-group list-group-flush">
          <li class="list-group-item">Nome: <?php echo $ospite['name'] ?></li>
          <li class="list-group-item">Cognome: <?php echo $ospite['lastname'] ?></li>
          <li class="list-group-item">Data di nascita: <?php echo $ospite['date_of_birth'] ?></li>
          <li class="list-group-item">Tipo di documento: <?php echo $ospite['document_type'] ?></li>
          <li class="list-group-item">Numero documento: <?php echo $ospite['document_number'] ?></li>
          <li class="list-group-item">Creato il: <?php echo $ospite['created_at'] ?></li>
          <li class="list-group-item">Aggiornato il: <?php echo $ospite['updated_at'] ?></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<?php include '../partials/_footer.php'; ?>
