<?php
  define('LOGIN_COOKIE_NAME', 'username');

$username = '';
$user_is_logging_in = false; // Savoir si l'utilisateur vient d'essayer de se connecter
$user_is_logged_in = false; // Savoir si l'utilisateur est connecté ou pas

// L'utilisateur est connecté si le cookie existe et la valeur n'est pas vide
$user_is_logged_in = array_key_exists(LOGIN_COOKIE_NAME, $_COOKIE)
    && (strlen($_COOKIE[LOGIN_COOKIE_NAME]) > 0);

if ($user_is_logged_in) {// Utilisateur connecté
  $username = $_COOKIE[LOGIN_COOKIE_NAME];
  $user_is_logging_out = array_key_exists('logout_sbmt', $_POST);
  if ($user_is_logging_out) {
    setcookie(LOGIN_COOKIE_NAME, '', time() - 30 * 24 * 3600); // Mettre à vide ET supprimer le cookie
    unset($_COOKIE[LOGIN_COOKIE_NAME]); // Précaution
    $username = ''; // Précaution
    $user_is_logged_in = false;
  }
}
else
{// Utilisateur n'est pas connecté
  $user_is_logging_in = array_key_exists('login_sbmt', $_POST)
      && array_key_exists('username', $_POST)
      && array_key_exists('password', $_POST);
  if ($user_is_logging_in) { // L'utilisateur veut se connecter
    require_once('authentication.php'); // Code d'authentification utilisé ici seulement
    $user_is_authenticated = is_authenticated($_POST['username'], $_POST['password']);
    if ($user_is_authenticated) { // On établit la connection ici
      $username = $_POST['username'];
      setcookie(LOGIN_COOKIE_NAME, $username, time() + 30 * 24 * 3600); // Créer le cookie pour 1 mois
      $user_is_logged_in = true;
    }
  }
}
?>

<!DOCTYPE html>
<html>
<head lang="en">
  <meta charset="UTF-8">
  <title>Formulaire connexion / déconnexion avec persistence "fragile" (cookies)</title>
</head>
<body>
<h1>Formulaire connexion / déconnexion avec persistence "fragile" (cookies)</h1>
<?php if ( ! $user_is_logged_in): ?>
<!--Formulaire de login -->
<form name="login_form" method="post" action="">
  <input type="text" name="username" value="" placeholder="Pseudo"/>
  <input type="password" name="password" value="" placeholder="Mot de passe"/>
  <input type="submit" name="login_sbmt" value="Connexion"/>
</form>
<?php if ($user_is_logging_in && ! $user_is_authenticated): // Échec authentification?>
  <p>L'authentification a échoué !</p>
<?php endif; ?>
<?php else: ?>
<!--Formulaire de logout -->
<form name="logout_form" method="post" action="">
  <span><?php echo $username; ?></span>
  <input type="submit" name="logout_sbmt" value="Déconnexion"/>
</form>
<?php endif; ?>

</body>
</html>