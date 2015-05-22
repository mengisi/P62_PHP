<?php
$a = 97;
$b = 87;
$c = 75;
$d = 65;
$e = 45;

function grade($note)
{
    $grade = '';
    switch ($note) {
        case ($note <= 100) && ($note > 95):
            $grade = 'A';
            break;
        case ($note <= 95) && ($note > 85):
            $grade = 'B';
            break;
        case    ($note <= 85) && ($note > 70):
            $grade = 'C';
            break;
        case   ($note <= 70) && ($note > 50):
            $grade = 'D';
            break;
        case   ($note <= 50):
            $grade = 'E';
            break;
    }
    return $grade;
}

function remarque($note)
{
    $remarque = '';
    switch ($note) {
        case ($note <= 100) && ($note > 95):
            $remarque = 'Excellent';
            break;
        case ($note <= 95) && ($note > 85):
            $remarque = 'Bon';
            break;
        case    ($note <= 85) && ($note > 70):
            $remarque = 'Moyen';
            break;
        case   ($note <= 70) && ($note > 50):
            $remarque = 'Peux mieux faire';
            break;
        case   ($note <= 50):
            $remarque = 'Humm...Pas super';
            break;
    }
    return $remarque;
}

//var_dump(grade($a));
//exit;
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
    <table>
        <tr>
            <th>Note</th>
            <th>Grade</th>
            <th>Remarque</th>
        </tr>
        <?php
        echo "<tr><td>$a</td><td>", grade($a), '</td>', '<td>', remarque($a), '</td></tr>';
        echo "<tr><td>$b</td><td>", grade($b), '</td>', '<td>', remarque($b), '</td></tr>';
        echo "<tr><td>$c</td><td>", grade($c), '</td>', '<td>', remarque($c), '</td></tr>';
        echo "<tr><td>$d</td><td>", grade($d), '</td>', '<td>', remarque($d), '</td></tr>';
        echo "<tr><td>$e</td><td>", grade($e), '</td>', '<td>', remarque($e), '</td></tr>';
        ?>
    </table>
</div>
<script src="js/main.js"></script>
</body>
</html>