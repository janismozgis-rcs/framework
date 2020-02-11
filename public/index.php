<?php

// home
// posts
// info
// - about us
// - contacts
// login
// registration
// super-sercret

require_once '../app/Views/BaseView.php';
require_once '../app/Controllers/HomeController.php';
require_once '../app/Controllers/PostsController.php';
require_once '../app/Controllers/AboutUsController.php';
require_once '../app/Controllers/ContactsController.php';
require_once '../app/Controllers/LoginController.php';
require_once '../app/Controllers/RegistrationController.php';
require_once '../app/Controllers/SuperSecretController.php';

$page = $_GET['page'] ?? 'home';

switch ($page) {
    case 'home':
        echo (new HomeController)->index();
        break;
    case 'posts':
        echo (new PostsController)->index();
        break;
    case 'about-us':
        echo (new AboutUsController)->index();
        break;
    case 'contact-us':
        echo (new ContactsController)->index();
        break;
    case 'login':
        echo (new LoginController)->index();
        break;
    case 'registration':
        echo (new RegistrationController)->index();
        break;
    case 'super-secret':
        echo (new SuperSecretController)->index();
        break;

    default:
        echo (new HomeController)->index();
}

