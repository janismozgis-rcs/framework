<?php

class BaseView
{
    public static function generate(string $a, string $b, $c): string
    {
        ob_start();
        require __DIR__ . '/Global/header.php';
        require __DIR__ . '/' . $a . '/' . $b . '.php';
        require __DIR__ . '/Global/footer.php';
        $html = ob_get_clean();

        return $html;
    }
}