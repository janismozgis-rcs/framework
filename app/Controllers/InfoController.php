<?php

class InfoController
{
    public function aboutUs(): string
    {
        return BaseView::generate('Info', 'aboutUs');
    }
    public function contactUs(): string
    {
        return BaseView::generate('Info', 'contactUs');
    }
}