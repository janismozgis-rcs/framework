<?php

class BaseView
{
    public static function generate(string $controller, string $view): string
    {
        ob_start();
        require __DIR__ . '/Global/header.php';
        require __DIR__ . '/' . $controller . '/' . $view . '.php';
        require __DIR__ . '/Global/footer.php';
        $html = ob_get_clean();

        return $html;
    }
}