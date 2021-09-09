<?php

function retrieve_user(string $email){
    $db = db_connexion();

    $request = "SELECT * FROM user WHERE `email` = :email";
    $stmt = $db->prepare($request);

    $stmt->bindParam(':email', $email);
    $stmt->execute();

    if(!$stmt) echo 'error 400 bad request';
    $user = $stmt->fetchAll(PDO::FETCH_ASSOC);
    if($user){
        return $user;
    }else{
        exit('identifiant ou mot de passe incorrect');
    }
}