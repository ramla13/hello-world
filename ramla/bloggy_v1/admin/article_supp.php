<?php
$id=$_GET['id'];

require_once("../classes/Article.php");
 $c=new Article();
 $c->_id=$id;
                 $c->supprimer();
                 header("Location:article_liste.php");

?>