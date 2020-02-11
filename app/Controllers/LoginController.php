<?php

class LoginController
{
    public function index(): string
    {
        return BaseView::generate('Login', 'index');
    }
}
