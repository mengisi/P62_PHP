<?php
$students = array(
    array(97, 'A', 'Excellent'),                   //  array里面有array
    array(87, 'B', 'Bon'),                         //  array里面有array
    array(75, 'C', 'Moyen'),                       //  array里面有array
    array(65, 'D', 'Peux mieux faire'),            //  array里面有array
    array(45, 'E', 'Humm...Pas super'),            //  array里面有array
)
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Untitled</title>
    <link rel="stylesheet" href="style/main.css"/>
    <style>
        table {
            border-collapse: collapse;
        }

        th, td {
            border: 1px solid black;
        }
    </style>
</head>
<body>
<div id="main_wrapper">

    <?php
    echo '<table>';
    echo '<tr><th>Note</th><th>Grade</th><th>Remarque</th></tr>';
    for ($i = 0; $i < count($students); $i++) {
        //  下面要 同时用 两个 [ ]
        echo '<tr><td>', $students[$i][0], '</td><td>', $students[$i][1], '</td><td>', $students[$i][2], '</td></tr>';
    }

    echo '</table>';
    ?>

</div>
<script src="js/main.js"></script>
</body>
</html>