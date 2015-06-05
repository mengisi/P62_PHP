<?php
session_start();

define('OP_AJOUTER', 'OP_AJOUTER');
define('OP_RETIRER', 'OP_RETIRER');
define('OP_RETIRER_TOUT', 'OP_RETIRER_TOUT');
define('OP_VIDER_PANIER', 'OP_VIDER_PANIER');

define('FRUIT_BANANE', 'FRUIT_BANANE');
define('FRUIT_POMME', 'FRUIT_POMME');
define('FRUIT_POIRE', 'FRUIT_POIRE');

define('SESS_NB_BANANE', 'SESS_NB_BANANE');
define('SESS_NB_POMME', 'SESS_NB_POMME');
define('SESS_NB_POIRE', 'SESS_NB_POIRE');

// Initialisation des données de session
if ( ! array_key_exists(SESS_NB_BANANE, $_SESSION)) {
	$_SESSION[SESS_NB_BANANE] = 0;
}
if ( ! array_key_exists(SESS_NB_POIRE, $_SESSION)) {
	$_SESSION[SESS_NB_POIRE] = 0;
}
if ( ! array_key_exists(SESS_NB_POMME, $_SESSION)) {
	$_SESSION[SESS_NB_POMME] = 0;
}

function make_action_url($action, $fruit = '') {
	return '?action=' . $action . ((! empty($fruit)) ? '&fruit=' . $fruit : '');
}

if (array_key_exists('action', $_GET)) {
	$action = $_GET['action']; 
	$fruit = false;
	if (array_key_exists('fruit', $_GET)) {
		$fruit = $_GET['fruit'];
	}
	switch ($action) {
		case OP_AJOUTER :
			if (false !== $fruit) {
				switch ($fruit) {
					case FRUIT_BANANE:
						$_SESSION[SESS_NB_BANANE]++;
						break;
					case FRUIT_POMME:
						$_SESSION[SESS_NB_POMME]++;
						break;
					case FRUIT_POIRE:
						$_SESSION[SESS_NB_POIRE]++;
						break;
				}
			}
			break;
		case OP_RETIRER :
			if (false !== $fruit) {
				
			}
			break;
		case OP_RETIRER_TOUT :
			if (false !== $fruit) {
				
			}
			break;
		case OP_VIDER_PANIER :
			break;
	}
}

?>


<! DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Panier mis à jour avec Ajax (jQuery)</title>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
	<script src="js/panier.js"></script>
	<style>
		#liens {
			width : 30%;
			background-color: #0FDA0F;
			display: inline-block;
		}
		#panier {
			width : 30%;
			display: inline-block;
			background-color: #dab2c0;
		}
	</style>
</head>
<body>
<h1>Panier mis à jour avec Ajax (jQuery)</h1>
<div id="liens">
	<ul>
		<li>
			<a href="<?php echo make_action_url(OP_AJOUTER, FRUIT_BANANE); ?>" >Ajouter une banane</a>
			<br><button>ABAJAX</button>
		</li>
		<li>
			<a href="<?php echo make_action_url(OP_RETIRER, FRUIT_BANANE); ?>" >Oter une banane</a>
		</li>
		<li>
			<a href="<?php echo make_action_url(OP_RETIRER_TOUT, FRUIT_BANANE); ?>" >Enlever toutes les bananes</a>
		</li>
		<li>
			<a href="<?php echo make_action_url(OP_AJOUTER, FRUIT_POIRE); ?>" >Ajouter une poire</a>
		</li>
		<li>
			<a href="<?php echo make_action_url(OP_RETIRER, FRUIT_POIRE); ?>" >Oter une poire</a>
		</li>
		<li>
			<a href="<?php echo make_action_url(OP_RETIRER_TOUT, FRUIT_POIRE); ?>" >Enlever toutes les poires</a>
		</li>
		<li>
			<a href="<?php echo make_action_url(OP_AJOUTER, FRUIT_POMME); ?>" >Ajouter une pomme</a>
		</li>
		<li>
			<a href="<?php echo make_action_url(OP_RETIRER, FRUIT_POMME); ?>" >Oter une pomme</a>
		</li>
		<li>
			<a href="<?php echo make_action_url(OP_RETIRER_TOUT, FRUIT_POMME); ?>" >Enlever toutes les pommes</a>
		</li>
		<li>
			<a href="<?php echo make_action_url(OP_VIDER_PANIER); ?>" >Vider le panier</a>
		</li>
	</ul>
</div>
<div id="panier">
	<p>Nb bananes : <span id="nb_bananes"><?php echo $_SESSION[SESS_NB_BANANE]; ?></span></p>
	<p>Nb poires : <?php echo $_SESSION[SESS_NB_POIRE]; ?></p>
	<p>Nb pommes : <?php echo $_SESSION[SESS_NB_POMME]; ?></p>
</div>
</body>
</html>

