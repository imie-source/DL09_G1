<?php
	$dom = new DomDocument;
	$dom->load("bibliotheque.xml");
	$lesLivres = $dom->getElementsByTagName('livre');
	$lesEmprunts = $dom->getElementsByTagName('emprunt');
		foreach($lesLivres as $livre){
			foreach($livre->childNodes as $element){
			if($element->nodeName=="auteur"){
				echo "Auteur: ";
			}
			if($element->nodeName=="titre"){
				echo "Titre: ";
				$titreLivre=$element->nodeValue;
			}
?>