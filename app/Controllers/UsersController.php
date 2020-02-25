<?php

class UsersController
{
    public function login(): string
    {
        return BaseView::generate('Users', 'login');
    }
    
    public function register(): string 
    {
        $errors = [];
        if ($_POST) {
            $errors = User::validate($_POST);
            if (!$errors) {
                UsersRepository::createUser($_POST);
                header('Location: ?page=login');
            }
        }

        return BaseView::generate('Users', 'register', ['errors' => $errors]);
    }
}