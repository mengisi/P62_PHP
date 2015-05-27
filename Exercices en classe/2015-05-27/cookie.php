<?php

$tb = array(
    'bierre', 'porc', 'boeuf', 'legume',
);
echo isset($_COOKIE['select']) ? $_COOKIE['select'] : '';
//setcookie('select', $_GET['select'],[60*60]);
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
    <form action='#'>
        <select name="select">
            <option>Choisir</option>
            <?php
            foreach ($tb as $v) {
                if (isset($_GET['select']) && $_GET['select'] == $v) {
                    echo "<option selected='selected'>$v</option>";
                } else {
                    echo "<option>$v</option>";
                }
            }
            ?>
        </select>
        <input type="submit" value="Go">
    </form>
</div>
<!--<script src="js/main.js"></script>-->
</body>
</html>