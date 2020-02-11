<?php

class PostsController
{
    public function index(): string
    {
        return BaseView::generate('Posts', 'index');
    }
}