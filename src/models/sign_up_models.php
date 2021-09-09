<?php

function insert_user( $firstname,$lastname, $email, $password, $phone, $registration_date) {
	$db = db_connexion();

	$request = "INSERT INTO user (firstname, lastname, email, password, phone, registration_date) VALUE (:firstname, :lastname, :email, :password, :phone, :registration_date)";
	$stmt = $db->prepare($request);

	$stmt->bindParam(':firstname', $firstname);
	$stmt->bindParam(':lastname', $lastname);
	$stmt->bindParam(':email', $email);
	$stmt->bindParam(':password', $password);
	$stmt->bindParam(':phone', $phone);
	$stmt->bindParam(':registration_date', $registration_date);

    $stmt->execute();

	if($stmt === false) erreur500();
}
