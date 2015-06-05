<?php
require_once('P62_DBkitDem_conn.php');

/**
 *  Opérations sur les produits
 * 	- parcourir
 */
 
/**
 * Parcours des produits
 */ 
function produit_parcours($categorie_id = false) {
	global $mysqli;
	$resultat = false;
	$table_produit = P62_DBKITDEM_TB_PRODUCT;
	$table_categorie = P62_DBKITDEM_TB_PRODUCT_CATEGORY;
	$query_str = "SELECT p.name, c.name as cat_name FROM $table_produit p, $table_categorie c WHERE p.category_id = c.id";
	if (false !== $categorie_id) {
		$categorie_id = $mysqli->real_escape_string($categorie_id);
		$query_str .= " WHERE categorie_id=$categorie_id";
	}
	var_dump($query_str);
	$res = $mysqli->query($query_str); // Execution de la requete
	if ($res) {
		$resultat = array();
	    while ($row = $res->fetch_assoc()) {
			$resultat[] = $row; 
	    }
	};
	return $resultat;
}
?>


