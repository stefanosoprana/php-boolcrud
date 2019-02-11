<?php include 'partials/_head.php'; ?>

<?php include 'partials/_navbar.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1><b>Ospiti dell'hotel</b></h1>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <a href="http://localhost/esercizi/esercizio1_boolcrud/create/form.php" class="btn btn-primary">Aggiungi ospite</a>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <table class="table">
        <thead>
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Cognome</th>
            <th>Visualizza</th>
            <th>Aggiorna</th>
          </tr>
        </thead>
        <tbody>
          <?php include 'database.php'; ?>

          <?php foreach ($ospiti as $persona) { ?>
            <tr>
              <td><?php echo $persona['id']; ?></td>
              <td><?php echo $persona['name']; ?></td>
              <td><?php echo $persona['lastname']; ?></td>
              <td>
                <a href="http://localhost/esercizi/esercizio1_boolcrud/show/show.php?id=<?php echo $persona['id']; ?>" class="btn btn-primary">
                  VAI
                </a>
              </td>
              <td><a href="http://localhost/esercizi/esercizio1_boolcrud/update/form.php?id=<?php echo $persona['id']; ?>" class="btn btn-success">Aggiorna</a></td>
            </tr>
          <?php } ?>
        </tbody>
      </table>
    </div>
  </div>
</div>

<?php include 'partials/_footer.php'; ?>
