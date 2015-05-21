<?php
$tab = array(
    'ref' => 'PC × 25',     //此处的clef是整数，不是字符串
    'prix' => 4500,
    'qté' => 25,
    'tx' => 12.358,
);
var_dump($tab);
unset($tab['prix']);   //此处 中括号
var_dump($tab);
exit;           //Met fin a l'execution du script
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Untitled</title>
    <style>
        td,th {border: 1px solid black;}

        table {border-collapse: collapse;}
    </style>
</head>
<body>
<h3>Nouveau Tableau</h3>
<?php
foreach ($tab as $indice => $val) {
    echo "<p>$indice : $val</p>";
}
?>
<table>
    <tr>
        <?php
        foreach ($tab as $key => $val) {
            echo "<th>$key</th>";
        }
        ?>
    </tr>
    <tr>
        <?php
        foreach ($tab as $val) {
            echo "<td>$val</td>";
        }
        ?>
    </tr>
</table>
</body>
</html>