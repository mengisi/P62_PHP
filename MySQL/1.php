<?php
$connextion = new mysqli('localhost', 'root', '', 'article');
if ($connextion->connect_errno) {
    echo 'Erreur de connexion';
}

//在TABLE中搜索  此处 -> 表示后者为前者的特性(property)
$requete = 'SELECT * FROM articlee';
$res = $connextion->query($requete);
if (! $res) {
    echo 'error requete select';
}
if ($res && ($res->num_rows) > 0) {   // $res->num_rows 表示TABLE中的内容数量
    while ($valeur = $res->fetch_assoc()) {     // 通过循环,输出多个 mono array (非 multi-dimentional)
        var_dump($valeur);
    }
}
var_dump($res->num_rows);

//插入TABLE
/*$requete ="INSERT INTO `articlee` (`name`, `description`, `catagery`) VALUES ('Allo', 'Coucou', 'Ole');";
$res = $connextion->query($requete);
if (! $res) {
    echo 'error requete insert';
}*/
