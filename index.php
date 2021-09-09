<?php

require __DIR__ . '/config.php';
require __DIR__ . '/functions/functions.php';



if(!empty($_GET['route'])){

    $route = $_GET['route'];

    switch($route){
        case 'accueil':
        require CONTROLLERS . '/home_controller.php';
        init_session();
        display_home();
        break;

        case 'connexion':
        require CONTROLLERS . '/login_controller.php';
        init_session();
        display_login_page();
        break;

        case 'connexion-handler':
        require CONTROLLERS . '/login_controller.php';
        init_session();
        login_handler();
        break;

        case 'inscription':
        require CONTROLLERS . '/sign_up_controller.php';
        display_signup_page();
        init_session();
        break;

        case 'inscription-handler':
        require CONTROLLERS . '/sign_up_controller.php';
        create_user_handler();
        init_session();
        break;

        case 'selection':
        require CONTROLLERS . '/selection_page_controller.php';
        display_selection_page();
        init_session();
        break;

        case 'contact':
        require CONTROLLERS . '/contact_controller.php';
        display_contact_page();
        init_session();
        break;
    }
}else {
    echo 'error 500';
}