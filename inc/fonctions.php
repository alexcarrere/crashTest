<?php 

/**
 * Permet de nettoyer (enlever les balises html + les espaces avant les valeurs) les données contenues dans un tableau
 * @param  array $array le tableau à nettoyer
 * @return array        le tableau nettoyé
 */
function cleanArray($array) {
	$array = array_map('strip_tags', $array);
	$array = array_map('trim', $array);
	return $array;
}

/**
 * Fonction permettant de vérifier la longueur d'une chaine de caractères
 * @param string $data La chaine à vérifier
 * @param int $minlength La longueur minimale
 * @param int $maxlength La longueur maximale
 * @return booleen true si la longueur est ok, false sinon
 */
function minOrMaxLength($data, $minlength, $maxlength){
	if(strlen($data) < $minlength || strlen($data) > $maxlength){
		return false;
	}
	else {
		return true;
	}
}

/**
 * Vérifie l'existence d'une adresse email dans la base de données
 * @param string $email L'adresse email à vérifier
 * @return mixed false si l'email est vide ou l'adresse mail n'existe pas, sinon les emails existants (array)
 */
function emailExist($email){
	global $pdo; // Permet d'accéder à la variable $pdo qui se trouve en dehors de la fonction

	$email = trim(strip_tags($email)); // On nettoie le paramètre
	if(empty($email)){ // Si $email est vide, on renvoit false
		return false;
	}

	// On effectue une requête pour vérifier l'existence de l'email
	$select = $pdo->prepare('SELECT email FROM members WHERE email = :checkEmail');
	$select->bindValue(':checkEmail', $email);
	$select->execute();

	return $select->fetchColumn();
}