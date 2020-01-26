 <?php

require 'app/App.php';
use App\App;
 use App\Controller\ArticleController;

define ('ROOT', __DIR__);
App::load();



if(isset($_GET["page"]) && $_GET["page"] == 'home' || !isset($_GET["page"]))
{
    $result = new ArticleController();
    $result->home();   
}

if(isset($_GET["page"]) && $_GET["page"] == 'add')
{
    $result = new ArticleController();
    $result->addArticle();

}

if(isset($_GET["delete_article"]))
{
    $result = new ArticleController();
    $result->delete();
}

if(isset($_GET["categorie"]))
{
    $result = new ArticleController();
    $result->getCategorie();
}

if(isset($_GET['article']))
{
    $result = new ArticleController();
    $result->get();
}




