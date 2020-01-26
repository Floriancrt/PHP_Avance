
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>



<form action="" method="post" class="mt-5">

<input type="hidden" name="id" id="id" value="<?= $article["id"]  ?>">

<div class="form-group">
    <label for="title">Titre: </label>
    <input type="text" name="title" class="form-control" id="title" placeholder="Title" required value="<?= $article["title"] ?>">
</div>
<div class="form-group">
    <label for="text">Description: </label>
    <textarea name="description" id="description" class="form-control" rows="5" placeholder="Description" required><?= $article["description_article"]  ?></textarea>
</div>

<div class="form-group">
    <label for="category">Catégorie: </label>
    <input type="text" name="id_categorie" id="category" class="form-control" placeholder="Catégorie"
    required value="<?= $article["id_categorie"] ?>"></input>
</div>

<div class="form-group">
    <label for="date">Date: </label>
    <input type="text" id="date" name="date" class="form-control" required value="<?= $article["date_article"]  ?>">
</div>

<button type="submit" class="btn btn-success" name="submit" id="update_article">Modifier l'article !</button>

</form>