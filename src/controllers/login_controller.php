<?php require MODELS . '/login_model.php';

function display_login_page(){
    $title = 'Connexion';
    include VIEWS . '/login.php';
}

function login_handler(){
    if(
        isset($_POST['email'])
        &&  isset($_POST['password'])
    ){
        $verification = login_verification();
        if($verification === true){
            $user = retrieve_user($_POST['email']);
            if(password_verify($_POST['password'], $user["0"]["password"] )){
                init_session();
                $_SESSION['firstname'] = $user["0"]['firstname'];
                // var_dump($_SESSION);
            }
            else echo 'ientifiant ou mot de passe incorrect';
        }
    }
  
}

function login_verification(){
    $error_form = [];
    if(empty($_POST['email'])) $error_form [] = 'email non renseigné';
    if(empty($_POST['password'])) $error_form [] = 'mot de passe non renseigné';
    if(empty($error_form)) return true;
    else return $error_form;
}