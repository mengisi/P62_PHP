<?php
require_once('P62_DBkitDem_defines.php');

// Creation de l'objet $mysqli par la connexion 
// Il va nous servir tout au long du code pour l'utilisation de la DB  
$mysqli = new mysqli(P62_DBKITDEM_CONN_HOST, P62_DBKITDEM_CONN_USER, P62_DBKITDEM_CONN_PWD, P62_DBKITDEM_DBNAME);
if ($mysqli->connect_errno) {
    echo "Echec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}

if (!$mysqli->set_charset("utf8")) {
    printf("Erreur lors du chargement du jeu de caractères utf8 : %s\n", $mysqli->error);
}
/*else {
    printf("Jeu de caractères courant : %s\n", $mysqli->character_set_name());
}*/
// echo $mysqli->host_info . "\n";

?>


