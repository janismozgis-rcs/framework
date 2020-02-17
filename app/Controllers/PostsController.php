<?php

class PostsController
{
    public function index(): string
    {
        $c = PostsRepository::getPosts();
        
        return BaseView::generate('Posts', 'index', $c);
    }
}