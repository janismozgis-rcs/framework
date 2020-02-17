<?php

class ErrorsController
{
    public function error404(): string
    {
        return BaseView::generate('Errors', '404');
    }
}