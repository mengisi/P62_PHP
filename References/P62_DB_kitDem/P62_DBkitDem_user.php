<?php
require_once('P62_DBkitDem_conn.php');

/**
 * Encrypter le mot de passe
 */
function encrypter_mdp($motdepasse) {
    $l_result = md5 ($motdepasse);
    return $l_result;
}

/**
 *  Authentification d'un utilisateur
 */
function user_authenticate($username, $password) {
	global $mysqli;
	$resultat = false;
	$username = $mysqli->real_escape_string($username);
	$password = encrypter_mdp($mysqli->real_escape_string($password));
	$table_utilisateur = P62_DBKITDEM_TB_USER;
	$queryString = "SELECT * FROM $table_utilisateur WHERE username='$username' AND password='$password'";
	$res = $mysqli->query($queryString);
	if ($res && ($res->num_rows > 0)) {
		$resultat = $res->fetch_assoc(); 
	};
	return $resultat;
}

/**
 *  Insertion d'un nouvel utilisateur
 */
function user_add($username, $password, $prenom, $nom, $adr_courriel) {
    global $mysqli;
    $resultat = false;
    $username = $mysqli->real_escape_string($username);
    $password = $mysqli->real_escape_string($password);
    $prenom = $mysqli->real_escape_string($prenom);
    $nom = $mysqli->real_escape_string($nom);
    $adr_courriel = $mysqli->real_escape_string($adr_courriel);
    $table_utilisateur = P62_DBKITDEM_TB_USER;
    $queryString = "INSERT INTO $table_utilisateur (`username` , `password` , `prenom` , `nom` , `adr_courriel`) VALUES ('$username', '$password', '$prenom', '$nom', '$adr_courriel')";
    //var_dump($queryString);
    $res = $mysqli->query($queryString);
    if ($res) {
        $resultat = $mysqli->insert_id;
    };
    return $resultat;
}

?>


