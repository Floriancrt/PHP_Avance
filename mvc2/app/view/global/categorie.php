<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
<style>
.container {
  padding: 2rem 0rem;
}

h4 {
  margin: 2rem 0rem 1rem;
}

.table-image {
  td, th {
    vertical-align: middle;
  }
}
</style>

<h1>Catégorie</h1>


<form action="" method="post">
<div class="container">
  <div class="row">
    <div class="col-12">
      <table class="table table-bordered">
        <thead>
          <tr>
            <th scope="col">Nom de Catégorie</th>
            <th scope="col">Date</th>
            <th scope="col">Description</th>
            <th scope="col">Nom de l'article</th>
            <th scope="col"></th>
            <th scope="col"></th>
          </tr>
        </thead>
        <tbody>
        <?php foreach ($articles as $article): ?>
            <tr>
            
            <td><a href="?categorie='<?= $article["id_categorie"] ?>'"><?= $article["nom"] ?></a></td>
            <td><?= $article["date_article"] ?></input></td>
            <td><?= $article["description_article"] ?></input></td> 
            <td><a href="?article='<?= $article["id"] ?>'" name="title"><?= $article["title"] ?></a></td> 
            <td>
              <button type="button" class="btn btn-success" value="Modifier" name="ActionArticle"><i class="fas fa-edit"></i></button>
            </td>
            <td>
            <a href="?delete_article='<?= $article["id"] ?>'" name="nameArticle">Supprimer</a>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
</form>