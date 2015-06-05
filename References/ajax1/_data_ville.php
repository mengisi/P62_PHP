<?php
    header('Content-type: text/javascript'); // Sortie en json (MIME type)
    header('Access-Control-Allow-Origin: *'); // Sécurité lié mode 'localhost'
    $villes = array(
        'Montréal',
        'Toronto',
        'Vancouver',
        'Moncton',
        'Ottawa',
        'Edmonton',
        );
    echo json_encode($villes);