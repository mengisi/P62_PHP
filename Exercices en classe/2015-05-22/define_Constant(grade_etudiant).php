<?php
                                 // 常量的定义方法：
define('COMMENTAIRE_GRADE_E', 'Hummm ... pas super');
define('COMMENTAIRE_GRADE_D', 'Peux mieux faire');
define('COMMENTAIRE_GRADE_C', 'Moyen');
define('COMMENTAIRE_GRADE_B', 'Bon');
define('COMMENTAIRE_GRADE_A', 'Excellent');

$note = rand(0, 100);
$grade = null;
$commentaire= '';

if ($note <= 50) {
    $grade = 'E';
    $commentaire= COMMENTAIRE_GRADE_E;                 //常量的使用方法
} elseif ($note <= 70) {                 //此处使用 elseif (连在一起) 更方便
    $grade = 'D';
    $commentaire=COMMENTAIRE_GRADE_D;
} elseif ($note <= 85) {
    $grade = 'C';
    $commentaire=COMMENTAIRE_GRADE_C;
} elseif ($note <= 95) {
    $grade = 'B';
    $commentaire=COMMENTAIRE_GRADE_B;
} else {
    $grade = 'A';
    $commentaire=COMMENTAIRE_GRADE_A;
}

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Untitled</title>
</head>
<body>
<div id="main_wrapper">
    <?php
    echo "<h2>Note étudiant générée: $note</h2>";
    echo "<h2>Le grade est: $grade</h2>";
    echo "<h2>Le commentaire est: $commentaire</h2>";
    ?>
</div>
</body>
</html>