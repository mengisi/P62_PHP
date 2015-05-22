          <!--  此乃老师的版本-->

<?php
define('COMMENTAIRE_GRADE_E', 'Hummm .... pas super');
define('COMMENTAIRE_GRADE_D', 'Peux mieux faire');
define('COMMENTAIRE_GRADE_C', 'Moyen');
define('COMMENTAIRE_GRADE_B', 'Bon');
define('COMMENTAIRE_GRADE_A', 'Excellent');

/**
 * Détermine les seuils pour chaque grade
 */
$seuils_grades = array(
    'E' => 50,
    'D' => 70,
    'C' => 85,
    'B' => 95,
    'A' => 100,
);

/**
 * Détermine les commentaires pour chaque grade
 */
$commentaires_grades = array(
    'E' => COMMENTAIRE_GRADE_E,
    'D' => COMMENTAIRE_GRADE_D,
    'C' => COMMENTAIRE_GRADE_C,
    'B' => COMMENTAIRE_GRADE_B,
    'A' => COMMENTAIRE_GRADE_A,
);

// Initialisation ici
$note_etudiant = rand(0,100);
// Grade de l'étudiant
$grade_etudiant = null;

// Déterminer le grade dans une boucle
foreach ($seuils_grades as $grade => $seuil) {
    if ($note_etudiant <= $seuil) {
        $grade_etudiant = $grade;
        break; // IMPORTANT CAR LA CONDITION EST VRAIE pOUR LES VALEURS SUIVANTES
    }
}
// Déterminer le commentaire en fonction du grade
$commentaire_etudiant = $commentaires_grades[$grade_etudiant];

/*var_dump($note);
var_dump($grade);*/

?>
<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title>Grade étudiant</title>
</head>
<body>
<h1>Grade étudiant</h1>
<h2><?php echo "Note étudiant générée : $note_etudiant"; ?></h2>
<p><?php echo "Le grade est $grade_etudiant et le commentaire est \"$commentaire_etudiant\"."; ?></p>
</body>
</html>