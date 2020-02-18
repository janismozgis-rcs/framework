<?php

class PostsRepository
{
    public static function getPosts(): array
    {
        $dataJson = file_get_contents(__DIR__ . '/../data/posts.json');

        return json_decode($dataJson, true);
    }

    public static function getPost(int $id): ?array
    {
        $posts = self::getPosts();
        foreach ($posts as $post) {
            if ($post['id'] == $id) {
                return $post;
            }
        }

        return null;
    }
}