<?php

require __DIR__ . '/config.php';
require __DIR__ . '/functions/functions.php';



if(!empty($_GET['route'])){

    $route = $_GET['route'];

    switch($route){
        case 'accueil':
        require CONTROLLERS . '/home_controller.php';
        display_home();
        break;

        case 'connexion':
        require CONTROLLERS . '/login_controller.php';
        display_login_page();
        break;

        case 'inscription':
        require CONTROLLERS . '/sign_up_controller.php';
        display_signup_page();
        break;

        case 'selection':
        require CONTROLLERS . '/selection_page_controller.php';
        display_selection_page();
        break;

        case 'contact':
        require CONTROLLERS . '/contact_controller.php';
        display_contact_page();
        break;
    }
}else {
    echo 'error 500';
}