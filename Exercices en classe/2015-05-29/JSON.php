<?php
define('PANIER', 'PANIER');  // une seule "variable" dans la session
session_start();
if (!array_key_exists(PANIER, $_SESSION)) {
    $panier = array(
        'pizza' => 0,
        'madeleine' => 0,
        'guimauve' => 0,
    );
    $_SESSION[PANIER] = json_encode($panier);  // encode
} else {
    $panier = json_decode($_SESSION[PANIER],true);  //decode (lecture de $panier dans la session) 当该参数为 TRUE 时，将返回 array 而非 object
    $panier['guimauve']++;
    $_SESSION[PANIER] = json_encode($panier);  // encode
}
var_dump($panier);

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Untitled</title>
    <!--<link rel="stylesheet" href="style/main.css"/>-->
</head>
<body>
<div id="main_wrapper">
    <?php

    ?>
</div>
<!--<script src="js/main.js"></script>-->
</body>
</html>