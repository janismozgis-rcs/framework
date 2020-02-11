<?php

class RegistrationController
{
    public function index(): string
    {
        return BaseView::generate('Registration', 'index');
    }
}
