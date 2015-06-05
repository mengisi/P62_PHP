<?php
require_once('P62_DBkitDem_conn.php');

// Création d'un table d'essai
if (!$mysqli->query("DROP TABLE IF EXISTS essai") ||
    !$mysqli->query("CREATE TABLE essai(id INT)") ||
    !$mysqli->query("INSERT INTO essai(id) VALUES (1)")) {
    echo "Echec lors de la création de la table : (" . $mysqli->errno . ") " . $mysqli->error;
}
?>


