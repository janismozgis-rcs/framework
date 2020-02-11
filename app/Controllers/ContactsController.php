<?php

class ContactsController
{
    public function index(): string
    {
        return BaseView::generate('Contacts', 'index');
    }
}
