<?php
$ecole='ISI';
$groupe='G-20';
$nombreEtudiants=9;
$moyenneDuGroupe=92.5;
$bonNiveau=true;
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
    <table>
        <caption>Ecole = ISI - Groupe = G20</caption>
        <tr>
            <th>Nom de variable</th>
            <th>Type de la variable</th>
            <th>Sa valeur</th>
        </tr>
        <tr>
           <?php echo "<td>\$ecole</td>"; ?>         <!--可以自动打印变量的名称-->
            <td><?php echo gettype($ecole);?></td>
            <td><?php echo $ecole; ?></td>
        </tr>
        <tr>
            <td>groupe</td>
            <td><?php echo gettype($groupe); ?></td>
            <td><?php echo $groupe; ?></td>
        </tr>
        <tr>
            <td>nombreEtudiants</td>
            <td><?php echo gettype($nombreEtudiants); ?></td>
            <td><?php echo $nombreEtudiants; ?></td>
        </tr>
        <tr>
            <td>moyenneDuGroupe</td>
            <td><?php echo gettype($moyenneDuGroupe); ?></td>
            <td><?php echo $moyenneDuGroupe; ?></td>
        </tr>
        <tr>
            <td>bonNiveau</td>
            <td><?php echo gettype($bonNiveau); ?></td>
            <td><?php echo $bonNiveau; ?></td>
        </tr>
    </table>
</div>
<script src="js/main.js"></script>
</body>
</html>