<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title></title>
    <link rel="stylesheet" href="style/main.css"/>
</head>
<body>

<?php

$nomber=rand();
if(($nomber%3==0) and ($nomber%5==0)) {
echo '<p>', $nomber, ' est à la fois un multiple de 3 et de 5.</p>';
} else{
echo '<p>', $nomber, ' n\'est pas à la fois un multiple de 3 et de 5.</p>';};

?>

</body>
</html>