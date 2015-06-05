<?php
    // Initialisation ici
?>
<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>Input avec datalist maj Ajax</title>
</head>
<body>
  <h1>Input avec datalist maj Ajax</h1>
<form>
  <input type="text" id="ville" name="ville" list="liste_villes" placeholder="Choisir une ville" />
  <datalist id="liste_villes"></datalist>
</form>
<script>
  var ajax_url = 'http://localhost/P62/ec/ajax1/_data_ville.php';
  var datalist = document.getElementById('liste_villes');
  var input = document.getElementById('ville');
  // Mise en place requête
  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
    if (xmlhttp.readyState === 4) { // Réponse arrivée
      if (xmlhttp.status === 200) { // Statut correct
        var reponse = xmlhttp.responseText; // Ici les données sont en json
        var jsonOptions = JSON.parse(reponse);
        console.log(reponse);
      }
    }

  };
  xmlhttp.open('GET', ajax_url, true);
  xmlhttp.send();
</script>
</body>
</html>