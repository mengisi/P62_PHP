<?php

function authenticate($username, $password)
{
    $users = array(
        'charleselie' => 123,
        'francis' => 456,
        'carolina' => 789,
    );

//$result=array_key_exists($username,$users)&&($users[$username]==$password);

    $result = false;
    foreach ($users as $v_username => $v_pwd) {
        if (($username == $v_username)&&($password == $v_pwd)){
            $result = true;
            break;
        }
}
return $result;
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8"/>
    <title>Untitled</title>
    <!--<link rel="stylesheet" href="style/main.css"/>-->
</head>
<body>
<div id="main_wrapper">
    <?php

    ?>
</div>
<!--<script src="js/main.js"></script>-->
</body>
</html>