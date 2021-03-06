<?php
include("Mysql.php");
class Article extends Mysql



{




	private $_id;
	private $_titre;
	private $_texte;
	private $_d_ajout;
	private $_image;

// Méthode magique pour les setters & getters
	public function __get($property) {
		if (property_exists($this, $property)) {
               return ( $this->$property );
            }
    }

    public function __set($property, $value) {
        if (property_exists($this, $property)) {
        	if ($property == "_newsletter")
        		$this->$property = (empty($value)) ? 0 : 1;
        	else
            	$this->$property = $value;
        }
    }


	// Autres méthodes
public function ajouter()
	{
	   try {
	    if (!isset($this->_titre) || 
	    	!isset($this->_texte)
	    	)
	    	return false;
	    $q = "INSERT INTO article(titre, texte, d_ajout) 
	    	  VALUES (:titre, :texte, NOW())";
		$stmt = $this->get_cnx()->prepare($q);

		$stmt->bindParam(':titre', $this->_titre);
		$stmt->bindParam(':texte', $this->_texte);

		$stmt->execute();

		return $this->get_cnx()->lastInsertId();
		} catch (PDOException $e) {
		    exit("<pre>Erreur de connexion à la BdD : " . $e->getMessage() . "<br/>");
		}

	}


	public function supprimer()
	{
		$q = "DELETE FROM article WHERE id = :id";
		$stmt = $this->get_cnx()->prepare($q);
		$stmt->bindParam(':id', $this->_id);
		return ($stmt->execute() == true);
	}

	public function liste()
	{
		$q = "SELECT * FROM article ORDER BY d_ajout DESC";
		$liste = array(); // Tableau VIDE
		$res = $this->get_cnx()->query($q);
		foreach ($res as $row)
		{
			$a = new Article();

			$a->_id 	 = $row['id'];
			$a->_titre 	 = $row['titre'];
			$a->_texte 	 = $row['texte'];
			$a->_d_ajout = $row['d_ajout'];
			$a->_image = $row['image'];
			
			

		
			$liste[]=$a;
		}
		
		return $liste; // Renvoi un tableau d'objets
	}	

	//nombre d'articles

	/*public function statistique()
	{
	 
	 $q = "SELECT * FROM article ORDER BY date_ajout DESC";
	 $res = $this->get_cnx()->query($q);
	
     $count =$res->rowCount();
     return $count;
	
	}
*/
	public function decription()
{      $q = "SELECT texte FROM article WHERE id = :id";
		$stmt = $this->get_cnx()->prepare($q);
		$stmt->bindParam(':id', $this->_id);
		echo "$stmt->execute()";

	}

}
?>