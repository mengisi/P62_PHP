<?php
session_start();
//初始化该变量的值 非常重要
if (!array_key_exists('nombre', $_SESSION)) {
    $_SESSION['nombre'] = 0;
}
if (array_key_exists('action', $_GET) && ($_GET['action'] == 'add')) {
    $_SESSION['nombre']++;
    header('Location:' . $_SERVER['PHP_SELF']);          //  让其指向本页，防止刷新时也增加数字
}
if (array_key_exists('action', $_GET) && ($_GET['action'] == 'remove')) {
    $_SESSION['nombre'] = ($_SESSION['nombre'] > 0) ? $_SESSION['nombre'] - 1 : 0;
    header('Location:' . $_SERVER['PHP_SELF']);          //  让其指向本页，防止刷新时也增加数字
}
if (array_key_exists('action', $_GET) && ($_GET['action'] == 'remove_all')) {
    $_SESSION['nombre'] = 0;
    header('Location:' . $_SERVER['PHP_SELF']);          //  让其指向本页，防止刷新时也增加数字
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Untitled</title>
    <style>
        div {
            text-align: center;
        }

        .red {
            color: red;
            font-size: 1.5em;
        }
    </style>
</head>
<body>
<div id="main_wrapper">
    <h1>Panier de Madeleines </h1>

    <h3><a href="?action=add">Ajouter une madeleine</a></h3>

    <h3><a href="?action=remove">Retirer une madeleine</a></h3>

    <h3><a href="?action=remove_all">Vider le panier</a></h3>

    <h3></h3>

    <h3>Nombre de Madeleines dans votre panier:
        <?php echo "<span class='red'>{$_SESSION['nombre']}</span>"; ?>
    </h3>
</div>
<!--<script src="js/main.js"></script>-->
</body>
</html>