<?php
require_once('P62_DBkitDem_conn.php');
define('CNX_STATE_LOGON', 'CNX_STATE_LOGON'); // Indique l'état connecté dans les appels de fonction 
define('CNX_STATE_LOGOFF', 'CNX_STATE_LOGOFF'); // Indique l'état deconnecté dans les appels de fonction 

/**
 *  Opérations sur les utilisateurs
 * 	- authentification
 * 	- ajout
 * 	- maj date dernière connexion
 */
 
/**
 * Encrypter le mot de passe 
 */ 
function encrypter_mdp($motdepasse) {
	$l_result = md5 ($motdepasse);
	return $l_result;
}

/**
 * Authentification de l'utilisateur 
 */ 
function utilisateur_authenticate($username, $motdepasse) {
	global $mysqli;
	$l_result = false;
	// nETTOYAGE DES valeurs que l'on va injecgter dans la requète
	$username = $mysqli->real_escape_string($username);
	$motdepasseEncrypte = encrypter_mdp($motdepasse);
	$table_utilisateur = P62_DBKITDEM_TB_UTILISATEUR;
	$query_str = "SELECT * FROM $table_utilisateur WHERE username='$username' AND motdepasse='$motdepasseEncrypte'";
	//var_dump($query_str);
	$res = $mysqli->query($query_str); // Execution de la requete
	if ($res && ($res->num_rows > 0)) {
		$l_result = $res->fetch_assoc(); 
	};
	return $l_result;
}

/**
 * Ajout d'un nouvel utilisateur 
 */ 
function utilisateur_ajouter($username, $motdepasse, $prenom, $nom, $adrCourriel) {
	global $mysqli;
	$l_result = false;
	// NETTOYAGE DES valeurs que l'on va injecgter dans la requète
	$username = $mysqli->real_escape_string($username);
	$motdepasseEncrypte = encrypter_mdp($motdepasse);
	$prenom = $mysqli->real_escape_string($prenom);
	$nom = $mysqli->real_escape_string($nom);
	$adrCourriel = $mysqli->real_escape_string($adrCourriel);
	// Si vous ajoutez des champs, ne les oubliez pas ici

	$table_utilisateur = P62_DBKITDEM_TB_UTILISATEUR;
	$query_str = "INSERT INTO $table_utilisateur (`username` ,`motdepasse`, `prenom` ,`nom` ,`adr_courriel`) 
	VALUES ('$username',  '$motdepasseEncrypte',  '$prenom',  '$nom',  '$adrCourriel')";
	//var_dump($query_str);
	$res = $mysqli->query($query_str); // Execution de la requete
	if ($res && ($mysqli->affected_rows > 0)) {
		$l_result = $mysqli->insert_id;
	};
	
	return $l_result;
}

/**
 * Connexion ou déconnexion de l'utilisateur 
 */ 
function utilisateur_cnx_discnx($username, $cnx_state) {
	global $mysqli;
	$l_result = false;
	
	// Stratégie : Si l'utilisateur est présent on met à jour l'information de connexion
	// S'il est absent, on l'ajoute.
	$table_user_cnx = P62_DBKITDEM_TB_USERCNX;
	$table_utilisateur = P62_DBKITDEM_TB_UTILISATEUR;
	$username = $mysqli->real_escape_string($username);
	switch ($cnx_state) {
		case CNX_STATE_LOGON: 
			$champ_a_maj = 'date_cnx';
			break;
		case CNX_STATE_LOGOFF: 
			$champ_a_maj = 'date_discnx';
			break;
		default : 
			throw new Exception("Error param here : Correct it");
	}
	$maintenant = date("Y-m-d H:i:s");
	$query_str = "UPDATE $table_user_cnx SET $champ_a_maj ='$maintenant' WHERE user_id=(SELECT id FROM $table_utilisateur WHERE username='$username');";
	//var_dump($query_str);
	$res = $mysqli->query($query_str); // Execution de la requete
	//var_dump($res);exit();
	if ($res) {
		if (0 == $mysqli->affected_rows) { // Si la requète a échoué ou qu'aucune ligne n'a été touchée
			$query_str = "INSERT INTO $table_user_cnx (`user_id` ,`date_cnx`) VALUES ((SELECT id FROM $table_utilisateur WHERE username='$username'),  '$maintenant');";
			//var_dump($query_str);exit();
			$res = $mysqli->query($query_str); // Execution de la requete
			if ($res) {
				$l_result = $mysqli->insert_id;
			}
		}
	};
	if (! $res) {
		throw new Exception("Error Processing Insert Request", 1);
	} 
	return $l_result;
}

/**
 * Liste des utilisateurs connectés 
 */ 
function utilisateur_liste_connectes() {
	global $mysqli;
	$l_result = false;
	// Stratégie : Si l'utilisateur est présent on met à jour l'information de connexion
	// S'il est absent, on l'ajoute.
	$table_user_cnx = P62_DBKITDEM_TB_USERCNX;
	$table_utilisateur = P62_DBKITDEM_TB_UTILISATEUR;
	$maintenant = date("Y-m-d H:i:s");
	$query_str = "SELECT username FROM $table_utilisateur INNER JOIN $table_user_cnx ON ($table_utilisateur.id = $table_user_cnx.user_id) WHERE (date_cnx > date_discnx) OR (`date_discnx` IS NULL);";
	//var_dump($query_str);
	$res = $mysqli->query($query_str); // Execution de la requete
	//var_dump($res->num_rows);
	if ($res && ($res->num_rows > 0)) {
		$l_result = array();
		while ($row = $res->fetch_assoc()) {
			$l_result[] = $row['username']; 
		}; 
	};
	return $l_result;
}

?>


