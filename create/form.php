<?php include '../partials/_head.php'; ?>
<?php include '../partials/_navbar.php'; ?>

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Aggiungi un ospite</h1>
    </div>
  </div>
  <div class="row">
    <div class="col-12">
      <form class="form-group" method="post" action="http://localhost/esercizi/esercizio1_boolcrud/create/server.php">
        <div class="form-group">
          <label for="name">Nome</label>
          <input type="text" class="form-control" name="name" placeholder="Inserisci il nome">
        </div>
      </form>
      <form class="form-group">
        <div class="form-group">
          <label for="lastname">Cognome</label>
          <input type="text" class="form-control" name="lastname" placeholder="Inserisci il cognome">
        </div>
      </form>
      <form class="form-group">
        <div class="form-group">
          <label for="date_of_birth">Data di nascita</label>
          <input type="text" class="form-control" name="date_of_birth" placeholder="Inserisci la data di nascita">
        </div>
      </form>
      <form class="form-group">
        <div class="form-group">
          <label for="document_type">Tipo di documento</label>
          <input type="text" class="form-control" name="document_type" placeholder="Inserisci il tipo di documento">
        </div>
      </form>
      <form class="form-group">
        <div class="form-group">
          <label for="document_number">Numero documento</label>
          <input type="text" class="form-control" name="document_number" placeholder="Inserisci il numero del documento">
        </div>
      </form>
      <div class="form-group">
        <input type="submit" name="submit" value="Salva" class="form-control">
      </div>
    </div>
  </div>
</div>

<?php include '../partials/_footer.php'; ?>
