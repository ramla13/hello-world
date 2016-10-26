<?php
$xml="<?xml version='1.0' encoding='utf­8'?>
      <contacts>";
      require_once("../classes/Contact.php");
      $c=new Contact();
      $liste=$c->liste();
      foreach ($liste as $item) {

      	# code...
      	$xml.="<contacts>";
      	$xml.="<email>   $item->_email</email>";

      }

      $xml.="</contacts>";



?>