<?php
$bissextile='';
for ($i = 1582; $i < 2021; $i++) {
    if ((($i % 4 == 0) && ($i % 100 != 0)) || ($i % 100 == 0)) {
        $bissextile.= $i.' ';
    }
}
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
    <h1>Année bissextile</h1>

    <h2><?php echo $bissextile;?></h2>
</div>
<script src="js/main.js"></script>
</body>
</html>