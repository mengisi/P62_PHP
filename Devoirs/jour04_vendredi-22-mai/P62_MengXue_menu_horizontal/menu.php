<?php
$menu=array(
    'Accueil' => 'index.php',
    'Produits' => 'produits.php',
    'Services' => 'services.php',
    'Contact' => 'contact.php',
);
echo '<nav>';
echo '<ul>';
foreach($menu as $affiche => $adresse){
    echo "<a href='$adresse'><li>$affiche</li></a>";
}
echo '</ul>';
echo '</nav>';

