<?php
var_dump('3. Controleur : articles.php ->');

require 'modele/articles.php';
require 'controleur/upload.php';

/**
 * Controleur des articles
 */
function controleurArticles() {

    $articles = articles();

    return $articles;
}

/**
 * Controleur des articles par id
 */
function controleurArticleParId($id) {

    $article = articleParId($id);

    return $article;
}

/**
 * Controleur des articles par id
 */
function controleurPublierArticle($post, $files) {

    if(isset($post['publier-article'])) {

        $uploadReussi = upload($files);
        
        if($uploadReussi == true) {

            publierArticle($post, $files['image']['name']);
        }
        
    }
}