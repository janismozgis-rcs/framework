<?php

class UsersController
{
    public function login(): string
    {
        return BaseView::generate('Users', 'login');
    }
    public function register(): string 
    {
        return BaseView::generate('Users', 'register');
    }
}