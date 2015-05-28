<?php
/**
 * Indiquer si le username et le password founis correspondent à un utilisateur connu
 * @param $username
 * @param $password
 * @return bool
 */
function is_authenticated($username, $password) {
    define('ADMIN_USERNAME', 'admin'); // Le username de l'admin
    define('ADMIN_PASSWORD', '123'); // Le password de l'admin
    return (ADMIN_USERNAME == $username) && (ADMIN_PASSWORD == $password);
}
