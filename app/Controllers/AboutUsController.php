<?php

class AboutUsController
{
    public function index(): string
    {
        return BaseView::generate('AboutUs', 'index');
    }
}
