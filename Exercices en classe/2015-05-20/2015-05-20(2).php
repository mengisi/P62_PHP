<?php
$j=date('w');
$est_jour_semaine=($j !=0)&&($j !=6);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8"/>
<title>Premier script PHP</title>
</head>

<body>
<h1>Semaine ou fin de semaine</h1>

<h2><?php echo $est_jour_semaine? 'Semaine' : 'Fin de semaine'; ?></h2>


</body>
</html>