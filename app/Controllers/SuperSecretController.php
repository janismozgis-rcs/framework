<?php

class SuperSecretController
{
    public function index(): string
    {
        return BaseView::generate('SuperSecret', 'index');
    }
}
