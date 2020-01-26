
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>


  <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4"><?= $articles["title"] ?></h1>
    <h2 class="display-4"><?= $articles["date_article"] ?></h2>
    <h2 class="display-4"><?= $articles["nom"] ?></h2>
    <p class="lead"><?= $articles["description_article"] ?></p>
  </div>
</div>
