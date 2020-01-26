<?php

namespace App\Controller;

class ArticleController extends AppController{


    public function __construct(){
        $this->loadModel('Article');
    }

    public function home(){

        $articles = $this->modelName->queryArticles();
        return $this->render('global.home', [
            "articles" => $articles,
        ]);
    }

    public function get(){

        $articles = $this->modelName->getArticle($idArticle = $_GET["article"]);
        return $this->renderview('global.article_details', [
            "articles" => $articles,
        ]);
    }

    public function getCategorie(){

        $articles = $this->modelName->getCategorie($idCategorie = $_GET["categorie"]);
        return $this->renderview('global.categorie', [
            "articles" =>$articles,
        ]);
    }

    public function addArticle(){

        if(isset($_POST["submit"]))
        {
            $articles = $this->modelName->newArticle($titleArticle = $_POST["name"], 
                                                    $descriptionArticle = $_POST["description"], 
                                                    $dateArticle = $_POST["id_categorie"], 
                                                    $categorieArticle = $_POST["date"]);

                                                   
        }
        var_dump($_GET["name"]);
        return $this->render('global.add', [
            "articles" => $articles,
        ]);
    }


    public function updateArticle($id){

        if(isset($_POST["submit"]))
        {
        return $this->modelName->update($id);
        }
    }

    public function edit(){
        $article = $this->modelName->getArticle($idArticle = $_GET["update_article"]);
        return $this->renderview('global.article_update',[
            "article"=>$article
        ]);
    }

    public function deleteArticle()
    {

            $articles = $this->modelName->deleteArticle($idArticle = $_GET["delete_article"]);
            return $this->render('global.article_delete', [
                "articles" => $articles,
            ]);
            
    }

    
}