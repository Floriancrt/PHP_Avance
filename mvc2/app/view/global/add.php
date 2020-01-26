
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

<div class="container">
  <h2>Ajoutez un article</h2>
  <form action="index.php?page=add" method="POST">
    <div class="form-group">
      <label for="email">ID</label>
      <input type="text" class="form-control" id="id" placeholder="Entrez un ID" name="id">
    </div>
    <div class="form-group">
      <label for="pwd">Nom de l'article</label>
      <input type="text" class="form-control" id="name" placeholder="Entrez le nom de l'article" name="name">
    </div>
    <div class="form-group">
      <label for="pwd">Date</label>
      <input type="date" class="form-control" id="date" placeholder="Entrez la date" name="date">
    </div>
    <div class="form-group">
      <label for="pwd">Description de l'article</label>
      <input type="text" class="form-control" id="description" placeholder="Entrez une description" name="description">
    </div>
    <div class="form-group">
      <label for="pwd">Catégorie de l'article</label>
      <input type="text" class="form-control" id="categorie" placeholder="Catégorie de l'article" name="id_categorie">
    </div>
    <button type="submit" class="btn btn-primary">Envoyez</button>
  </form>
</div>
