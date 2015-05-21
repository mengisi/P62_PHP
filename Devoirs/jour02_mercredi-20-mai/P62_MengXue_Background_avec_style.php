<?php
$a='Bonjour, ';
$b='Bonsoir, ';
$c='Bon été ';
$font_size='50pt';
$color='red';
$cc=rand(0,255*255*255);
var_dump($cc);
$hex_color=dechex($cc);
?>

<!DOCTYPE html>
<html>
<head>
<style>
body{background-color:#<?php echo $hex_color; ?>;}
</style>
<meta charset="UTF-8"/>
<title>Premier script PHP</title>

</head>

<body>

<h1>Continuité des blocs</h1>

<?php echo '<p style= "font-size:', $font_size,';', 'color:', $color,'">'; ?>
<?php echo $a, $b, $c, '2015',''; ?>
</p>

</body>
</html>
