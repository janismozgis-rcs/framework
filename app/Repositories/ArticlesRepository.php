<?php

class ArticlesRepository
{
    public static function getArticles(): array
    {
        
        $query = DB::$connection->query("SELECT * FROM articles");
        $output = [];

        while ($article = $query->fetchObject('Article')) {
            $output[] = $article;
        }

        return $output;
    }

    public static function getArticle(int $id): ?Article
    {
        $query = DB::$connection->prepare("SELECT * FROM articles WHERE id = :id");
        $query->execute(['id' => $id]);
        
        $article = $query->fetchObject('Article');

        if (!$article) {
            return null;
        }

        return $article;
    }
}