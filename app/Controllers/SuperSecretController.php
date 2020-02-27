<?php

class SuperSecretController
{
    public function index(): string
    {
        if ($_SESSION['loggedIn'] != true) {
            header('Location: ?page=login');
            exit;
        }
        return BaseView::generate('SuperSecret', 'index');
    }
}
