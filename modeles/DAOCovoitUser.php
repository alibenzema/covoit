<?php
include_once '../entity/CovoitUser.php';

function getUnCovoitUser($id){
   	$pdo = PDO2::getInstance();

	//$requete = $pdo->prepare("SELECT ...
	// A COMPLETER

        
        //Après exécution de la requête, récupération d'un objet de la classe CovoitUser
	$requete->setFetchMode(PDO::FETCH_CLASS, 'CovoitUser');
	$unCovoitUser = $requete->fetch();
	  
	$requete->closeCursor();
	return $unCovoitUser;
}

function getLesCovoitUser(){
	$pdo = PDO2::getInstance();
        /* A COMPLETER
        $requete = $pdo->prepare("SELECT ....");
         * */
         
        $requete->execute();
         $tab = $requete->fetchAll(PDO::FETCH_CLASS, "CovoitUser");
         $requete->closeCursor();
	 return $tab;
}



function addCovoitUser($unCovoitUser){
   	$pdo = PDO2::getInstance();

	  // A COMPLETER
}



?>
