<?php

class PostsController
{
    public function index(): string
    {
        $posts = PostsRepository::getPosts();
        
        return BaseView::generate('Posts', 'index', ['posts' => $posts, 'user' => 'Koļa']);
    }
}