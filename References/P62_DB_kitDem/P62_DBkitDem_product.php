<?php
require_once('P62_DBkitDem_conn.php');


/**
 *  Insertion d'un nouveau produit
 */
function product_add($name, $category_id) {
    global $mysqli;
    $resultat = false;
    $name = $mysqli->real_escape_string($name);
    $table_product = P62_DBKITDEM_TB_PRODUCT;
    $queryString = "INSERT INTO $table_product (`name` , `category_id`) VALUES ('$name', '$category_id')";
    //var_dump($queryString);
    $res = $mysqli->query($queryString);
    if ($res) {
        $resultat = $mysqli->insert_id;
    };
    return $resultat;
}

/**
 *  Lister les produits
 */
function product_list($category_id = false) {
    global $mysqli;
    $resultat = false;
    $table_product = P62_DBKITDEM_TB_PRODUCT;
    $queryString = "SELECT `name` FROM $table_product";
    if (false !== $category_id) {
        $queryString .= " WHERE `category_id`=$category_id";
    }
    //var_dump($queryString);
    $res = $mysqli->query($queryString);
    if ($res && ($res->num_rows > 0)) {
        $resultat = $res->fetch_assoc();
    };
    return $resultat;
}

?>


