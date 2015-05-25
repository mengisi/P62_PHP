
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Untitled</title>
    <link rel="stylesheet" href="style/main.css"/>
</head>
<body>
<div id="main_wrapper">

    <h2><a href="?m=3&a=2000">mois et année</a> </h2>
    <?php
    setlocale(LC_TIME, 'fra_fra');

    if(array_key_exists('m',$_GET)&&array_key_exists('a',$_GET)){
        $mois=(int)$_GET['m']+1;
        $annee=(int)$_GET['a'];
        $date=ucfirst(strftime('%B %Y', mktime(0, 0, 0, $mois, 0, $annee)));   //首字大写
        echo "<h1>$date</h1>";
    }
    ?>
</div>
<script src="js/main.js"></script>
</body>
</html>