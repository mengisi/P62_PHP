<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
    <title>Titre</title>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8"/>
    <link rel="stylesheet" type="text/css" href="css/style.css"/>
</head>
<body>
<div id="admin">
    <div id="top"><a href="deconnect.php"><img src="images/exit.png"/>Déconnexion
            <?php
            //session_start();

            if (array_key_exists('username', $_COOKIE) && array_key_exists('password', $_COOKIE)) {
                echo $_COOKIE['username'];
            } else {
                exit;  // Empecher l'affichage si COOKIE n'existe pas
            }
            ?>
        </a>
    </div>
    <ul id="tabs">
        <li><a href="#" class="selected">Gestion des cours</a></li>
        <li><a href="#">Gestion des programme</a></li>
        <li><a href="#">Gestion des étudiants</a></li>
    </ul>
    <div id="content">
        <h1>Espace d'administration</h1>

    </div>
</div>

</body>
</html>
<?php
//var_dump($_SESSION);

?>
