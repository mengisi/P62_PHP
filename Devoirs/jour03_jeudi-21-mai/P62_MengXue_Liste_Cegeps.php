<?php
$cegep = array(
    "Collège Ahuntsic" => "http://www.collegeahuntsic.qc.ca/accueil/accueil.html",
    "Collège de Bois-de-Boulogne" => "http://www.bdeb.qc.ca/",
    "Champlain Regional Collège" => "http://www.crc-sher.qc.ca/home/",
    "Dawson College" => "http://www.dawsoncollege.qc.ca/",
    "Collège Édouard-Montpetit" => "http://www.college-em.qc.ca/",
    "John Abbott College" => "http://www.johnabbott.qc.ca/",
    "Cégep régional de Lanaudière" => "http://www.cegep-lanaudiere.qc.ca/",
    "Collège Lionel-Groulx" => "http://www.clg.qc.ca/");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Untitled</title>
    <link rel="stylesheet" href="style/main.css"/>
</head>
<body>
<div id="main_wrapper">

    <?php
    echo '<ul>';
    foreach ($cegep as $key => $val) {
        echo "<li><a href='$val'>$key</a></li>";
    }
    echo '</ul>';
    ?>

</div>
<script src="js/main.js"></script>
</body>
</html>