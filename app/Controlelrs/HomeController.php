<?php

class HomeController
{
    public function index()
    {
        // Views/Global/header.php
        // Views/Home/index.php
        // Views/Global/footer.php
        
        ob_start();
        require __DIR__ . '/../Views/Global/header.php';
        require __DIR__ . '/../Views/Home/index.php';
        require __DIR__ . '/../Views/Global/footer.php';
        echo ob_get_clean();
    }
}