<?php

class HomeController
{
    public function index()
    {
        return BaseView::generate('Home', 'index');
    }
}