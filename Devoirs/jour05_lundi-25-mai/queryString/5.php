
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Untitled</title>
    <link rel="stylesheet" href="style/main.css"/>
    <style>
        body {
            background-color: <?php echo $_GET['color'] ?>;
        }
    </style>

</head>
<body>
<div id="main_wrapper">

    <a href="?color=red"><h2>color = ?</h2></a>

</div>
<script src="js/main.js"></script>
</body>
</html>