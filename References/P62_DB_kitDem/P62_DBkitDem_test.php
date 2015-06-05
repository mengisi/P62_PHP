<?php
header('Content-Type: text/html; charset=utf-8');
require_once('P62_DBkitDem_user.php');
require_once('P62_DBkitDem_product.php');

/*$insert_id = user_add('alpha', 'beta', 'gamma', 'epsilon', 'alpha@gmail.com');
if (false !== $insert_id) {
    echo "Insertion faite avec ID = $insert_id<br>";
} else {
    echo "Echec Insertion<br>";
}*/
$produits = product_list();
var_dump($produits);
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8" />
</head>
<body>

<?php
echo "<ul>";
foreach ($produits as $produit) {
    echo '<li>', $produit['name'], '</li>';
}
echo "</ul>";
?>
</body>
</html>