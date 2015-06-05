<?php
header('Content-type: text/javascript');
header('Access-Control-Allow-Origin: *');
$villes = array(
    'Montreal',
    'Quebec',
    'Vancouver',
    'Moncton',
    'Ottawa',
    'Edmondon'
);

echo json_encode($villes);

?>
