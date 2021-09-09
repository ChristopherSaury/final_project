<?php require MODELS . '/sign_up_models.php';

function display_signup_page(){
    $title = 'Inscription';
    include VIEWS . '/sign_up.php'; 
}

function create_user_handler(){
    $_POST['registration_date'] = date('Y-m-d H:i:s');
    if (
        !empty($_POST['lastname'])
        &&  !empty($_POST['firstname'])
        &&  !empty($_POST['email'])
        &&  !empty($_POST['password'])
        &&  !empty($_POST['phone'])
        ){
            $_POST['lastname'] = validate_entry($_POST['lastname']);
            $_POST['firstname'] = validate_entry($_POST['firstname']);
            $_POST['email'] = validate_entry($_POST['email']);
            $_POST['password'] = validate_entry($_POST['password']);
            $_POST['phone'] = validate_entry($_POST['phone']);
            
            $_POST['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT);
            insert_user( $_POST['firstname'],$_POST['lastname'], $_POST['email'], $_POST['password'], $_POST['phone'], $_POST['registration_date']);
            redirection('accueil');
        }else{
            redirection('inscription');
        }
}