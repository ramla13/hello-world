<?php
	// Récupérer les valeurs des champs
	$email 		= $_POST['email'];
	$sujet 		= $_POST['sujet'];
	$message 	= $_POST['message'];
	$newsletter = $_POST['newsletter']; // peut générer une alerte si pas cochée ! c'est normal, faut ajouter un truc au début de la ligne

	require_once("./classes/Contact.php");
	$contact = new Contact();
	$contact->_email = $email;
	$contact->_sujet = $sujet;
	$contact->_message = $message;
	$contact->_newsletter = $newsletter;

	if($contact->ajouter())
		$retour = 1;
	else
		$retour = -1;

	

	 $tableau=array(
    "retour" => $retour,
    "sujet" => $sujet,

    
);
	 header('Content-Type: application/json');
	 echo json_encode($tableau);


