<?php

class PostsRepository
{
    public static function getPosts(): array
    {
        $query = DB::$connection->query("SELECT * FROM posts");

        $output = [];
        while ($post = $query->fetchObject('Post')) {
            $output[] = $post;
        }
        
        return $output;
    }

    public static function getPost(int $id): ?Post
    {
        $query = DB::$connection->prepare("SELECT * FROM posts WHERE id = :id");
        $query->execute(['id' => $id]);
        $post = $query->fetchObject('Post');

        if (!$post) {
            return null;
        }

        return $post;
    }
}