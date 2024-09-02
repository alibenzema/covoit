<?php
include_once '../entity/OffreCovoit.php';

/**
 * Récupère toutes les informations des OffresCovoit (sauf le chauffeur)
 * @return un tableau d'objet OffreCovoit
 */
function getLesOffresCovoitAnonyme(){
   	$pdo = PDO2::getInstance();

	//A COMPLETER
}

/**
 * Récupère toutes les informations des OffresCovoit, y compris les chauffeurs
 * @return un tableau d'objet OffreCovoit (chaque objet OffreCovoit contient l'objet CovoitUser correspondant )
 */
function getLesOffresCovoit(){
	$pdo = PDO2::getInstance();
// A COMPLETER 

}


function addOffreCovoit($uneOffreCovoit){
	$pdo = PDO2::getInstance();

        // A COMPLETER
 
}






?>
