<?php
	$titre		= $_POST['titre'];
	$texte 		= $_POST['texte'];
	 // peut générer une alerte si pas cochée ! c'est normal, faut ajouter un truc au début de la ligne

	 require_once("../classes/Article.php");
	$article = new Article();
	
	$article->_titre = $titre;
	$article->_texte = $texte;
	

	if($article->ajouter())
		$retour = 1;
	else
		$retour = -1;

	

	/*$tableau=array(
    "retour" => $retour,
    "sujet" => $sujet,);
	 header('Content-Type: application/json');
      echo json_encode($tableau);
      */
	header('Location: article_liste.php?retour=1');

  ?>