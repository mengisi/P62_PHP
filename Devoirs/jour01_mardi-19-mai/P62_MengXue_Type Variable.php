<?php
echo '<!DOCTYPE html>';
echo '<html>';
echo '<head>';
echo '<meta charset="UTF-8"/>';
echo '<title>Premier script PHP</title>';
echo '</head>';
echo '<body>';
$a = "5";  
$b = "";    //false
$c = "0";   //false
$d = null;   //false
$e = "TRUE";
$f = FALSE;
$g = ($a OR $b);   //此处最好用 || 和 &&
$h = ($a AND $c);

echo '$a: ',$a,' ',gettype($a);
if($a){echo ', true</br>';} else{echo ', false</br>';};  //或者 echo $a? 'true' : 'false';

echo '$b: ',$b,' ',gettype($b);
if($b){echo ', true</br>';} else{echo ', false</br>';};

echo '$c: ',$c,' ',gettype($c);
if($c){echo ', true</br>';} else{echo ', false</br>';};

echo '$d: ',$d,' ',gettype($d);
if($d){echo ', true</br>';} else{echo ', false</br>';};

echo '$e: ',$e,' ',gettype($e);
if($e){echo ', true</br>';} else{echo ', false</br>';};

echo '$f: ',$f,' ',gettype($f);
if($f){echo ', true</br>';} else{echo ', false</br>';};

echo '$g: ',$g,' ',gettype($g);
if($g){echo ', true</br>';} else{echo ', false</br>';};

echo '$h: ',$h,' ',gettype($h);
if($h){echo ', true</br>';} else{echo ', false</br>';};

echo '</body>';
echo '</html>';
?>