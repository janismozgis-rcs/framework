<?php

class PostsRepository
{
    public static function getPosts(): array
    {
        $dataJson = file_get_contents(__DIR__ . '/../data/posts.json');
        $posts = json_decode($dataJson, true);

        $output = [];
        foreach ($posts as $post) {
            $postObj = new Post();
            $postObj->id = $post['id'];
            $postObj->title = $post['title'];
            $postObj->text = $post['text'];
            $output[] = $postObj;
        }
        
        return $output;
    }

    public static function getPost(int $id): ?Post
    {
        $posts = self::getPosts();
        foreach ($posts as $post) {
            if ($post->id == $id) {
                return $post;
            }
        }

        return null;
    }
}