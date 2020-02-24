<?php

class ArticlesController
{
    public function index(): string
    {
        $articles = ArticlesRepository::getArticles();
        
        return BaseView::generate('Articles', 'index', ['articles' => $articles]);
    }
    public function viewArticle(): string
    {
        $id = $_GET['id'];
        $article = ArticlesRepository::getArticle($id);

        return BaseView::generate('Articles', 'viewArticle', ['article' => $article]);
    }
}