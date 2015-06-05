<?php
require_once('P62_DBkitDem_utilisateur.php');
require_once('P62_DBkitDem_produit.php');

/**
 *  Script de test des opérations sur la base DBkitDem
 * 	- authentification d'un utilisateur
 * 	- ajout d'un utilisateur
 * 	- parcours des produits
 */
 
$utilisateur = utilisateur_authenticate('dbkitdem0','pwd_incorrecte');
//var_dump($utilisateur);

$utilisateur = utilisateur_authenticate('dbkitdem1','pwd_dbkitdem1');
//var_dump($utilisateur);

// Ajout (insertion) d'un nouvel utilisateur
utilisateur_ajouter('dbkitdem4','pwd_dbkitdem4',  'ddd', 'DDD', 'ddd@domaine.com');

// parcours des produits (toutes catégories confondues)
$produits = produit_parcours();
//var_dump($produits);

// parcours des produits de type sport
$produits = produit_parcours(2);
//var_dump($produits);


// Enregistrement des connexions et déconnexions
utilisateur_cnx_discnx('fff', CNX_STATE_LOGON);
utilisateur_cnx_discnx('aaa', CNX_STATE_LOGON);
utilisateur_cnx_discnx('fff', CNX_STATE_LOGOFF);
utilisateur_cnx_discnx('ggg', CNX_STATE_LOGON);
utilisateur_cnx_discnx('ggg', CNX_STATE_LOGOFF);
utilisateur_cnx_discnx('ccc', CNX_STATE_LOGON);
utilisateur_cnx_discnx('bbb', CNX_STATE_LOGOFF);


$les_connectes = utilisateur_liste_connectes();
var_dump($les_connectes);

?>


