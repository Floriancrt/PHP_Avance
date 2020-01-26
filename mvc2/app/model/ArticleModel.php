<?php


namespace App\Model;
use  Core\Model\Model;

class ArticleModel extends Model{
    
    


    /**
     * Récupère l'ensemble des articles dans la table Articles
     * 
     */
    public function queryArticles(){
        return $this->db->query("SELECT id, title, date_article, description_article, categorie_id, id_categorie, nom 
                                FROM articles 
                                INNER JOIN categorie ON articles.categorie_id = categorie.id_categorie ", false);
    }

    /**
     * Récupère une catégorie dans la table Catégorie selon son id
     * 
     * @param int $idCategorie ID de la Catégorie
     */
    public function getCategorie($idCategorie){
        return $this->db->query("SELECT id, title, date_article, description_article, categorie_id, id_categorie, nom
                                FROM articles
                                INNER JOIN categorie ON articles.categorie_id = categorie.id_categorie
                                WHERE id_categorie = $idCategorie", false);
    }

    /**
     * Récupère un article dans la table Articles selon son id
     * 
     * @param int $idArticle ID de l'Article
     */
    public function getArticle($idArticle)
    {
        return $this->db->query("SELECT id, title, date_article, description_article, categorie_id, id_categorie, nom 
                                FROM articles 
                                INNER JOIN categorie ON articles.categorie_id = categorie.id_categorie
                                WHERE id = $idArticle", true);
    }

    /**
     * Ajoute un article dans la table Articles
     * 
     * @param varchar $titleArticle Intitulé de l'Article
     * @param varchar $descriptionArticle Description de l'Article
     * @param datetime $dateArticle Date de l'Article
     * @param int $categorieArticle Categorie de l'Article
     */
    public function newArticle( $titleArticle, $descriptionArticle, $dateArticle, $categorieArticle){
        return $this->db->query("INSERT INTO articles (title, date_article, description_article, categorie_id) 
                                VALUES '$titleArticle', '$descriptionArticle', '$dateArticle', '$categorieArticle' ");
    }

    /**
     * Modifie l'article dans la table Articles
     * 
     * @param varchar $titleArticle Intitulé de l'Article
     * @param varchar $descriptionArticle Description de l'Article
     * @param datetime $dateArticle Date de l'Article
     * @param int $categorieArticle Categorie de l'Article
     */
    public function updateArticle($titleArticle, $descriptionArticle, $dateArticle, $categorieArticle){
        return $this->db->query("UPDATE articles 
                                SET title = '$titleArticle', 
                                    description_article = '$descriptionArticle', 
                                    date_article = '$dateArticle',
                                    categorie_id = '$categorieArticle");
    }


    /**
     * Supprime un article selon son id dans la table Articles
     * 
     * @param int $idArticle ID de l'Article
     */
    public function deleteArticle($idArticle)
    {
        return $this->db->query("DELETE FROM articles WHERE id = $idArticle ",false);
    }
}