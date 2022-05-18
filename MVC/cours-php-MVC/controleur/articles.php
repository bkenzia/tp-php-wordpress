<?php
var_dump('3. Controleur : articles.php ->');

require 'modele/articles.php';

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