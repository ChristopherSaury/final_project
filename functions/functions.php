<?php

function init_session(): bool {
    // si l'utilisateur n'est pas connecté on démarre une session
    if(!session_id()){
        session_start();
        session_regenerate_id();
        return true;
    }
    // l'utilisateur n'est pas connecté ou il est déja connecté
    return false;
}

function clean_session(){
	session_unset();
	session_destroy();
}

function is_logged(){
	if(isset($_SESSION['firstname'])) return true;
	else return false;
}

function erreur500() {
	include VIEWS . '/errors/error500.php';
	die;
}
function erreur404() {
	include VIEWS . '/errors/error404.php';
	die;
}

function url(string $route ):string {
    return BASE_URL . '/index.php?route=' . $route;
}

function url_error(string $route ):string {
    return BASE_URL . '/index.php?route=' . $route . '?error=';
}

function redirection(string $route) {
	header('location: ' . url($route));
	die();
}

function db_connexion():PDO{
    $connexion = new PDO('mysql:host=' . DB_HOST . ';dbname=' . DB_NAME, DB_USER, DB_PSW);
	return $connexion;
}

function validate_entry ($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

